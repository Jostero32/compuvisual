#!/bin/bash

# Verifica si eres root
if [ "$(id -u)" -ne 0 ]; then
    echo "Por favor, ejecuta este script como root o usa sudo."
    exit 1
fi

# Variables
JDK_VERSION="8u382-b05"
JDK_BUILD="jdk8u382-b05"
JDK_URL="https://github.com/adoptium/temurin8-binaries/releases/download/jdk8u382-b05/OpenJDK8U-jdk_x64_linux_hotspot_8u382b05.tar.gz"
JVM_DIR="/usr/lib/jvm"
JDK_INSTALL_DIR="${JVM_DIR}/jdk8"

echo "Instalando wget..."
apt-get update -y
apt-get install wget -y

echo "Creando directorio para JDK..."
mkdir -p "$JVM_DIR"

echo "Descargando JDK 8 desde $JDK_URL..."
wget -O /tmp/$JDK_BUILD.tar.gz "$JDK_URL"

if [ $? -ne 0 ]; then
    echo "Error al descargar JDK. Verifica la URL."
    exit 1
fi

echo "Extrayendo JDK..."
tar -xzf /tmp/$JDK_BUILD.tar.gz -C "$JVM_DIR"

echo "Renombrando directorio a jdk8..."
mv "$JVM_DIR/$JDK_BUILD" "$JDK_INSTALL_DIR"

echo "Configurando JDK 8 como predeterminado..."
update-alternatives --install /usr/bin/java java "$JDK_INSTALL_DIR/bin/java" 1
update-alternatives --install /usr/bin/javac javac "$JDK_INSTALL_DIR/bin/javac" 1
update-alternatives --config java
update-alternatives --config javac

echo "Exportando JAVA_HOME al sistema..."
echo "export JAVA_HOME=$JDK_INSTALL_DIR" >> /etc/profile
echo "export PATH=\$JAVA_HOME/bin:\$PATH" >> /etc/profile

echo "Aplicando cambios..."
source /etc/profile

echo "Verificando instalación..."
java -version

if [ $? -eq 0 ]; then
    echo "JDK 8 instalado y configurado correctamente."
else
    echo "Hubo un problema con la instalación de JDK 8."
fi

# Limpieza
echo "Limpiando archivos temporales..."
rm -rf /tmp/$JDK_BUILD.tar.gz

echo "Proceso completado."
