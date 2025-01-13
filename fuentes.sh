#!/bin/bash

# Asegúrate de estar ejecutando este script como root o con privilegios de superusuario.

# 1. Crear el directorio de caché de Fontconfig y darle permisos adecuados
echo "Creando directorio de caché de Fontconfig..."
mkdir -p /var/cache/fontconfig
chmod 777 /var/cache/fontconfig
echo "Caché de Fontconfig configurado."

# 2. Establecer la variable de entorno FONTCONFIG_PATH
echo "Estableciendo FONTCONFIG_PATH..."
echo "export FONTCONFIG_PATH=/var/cache/fontconfig" >> ~/.bashrc
source ~/.bashrc
echo "FONTCONFIG_PATH configurado."

# 3. Instalar las fuentes de Microsoft (incluye Times New Roman)
echo "Instalando fuentes de Microsoft..."
apt-get update
apt-get install -y ttf-mscorefonts-installer
echo "Fuentes de Microsoft instaladas."

# 4. Verificar que la fuente 'Times New Roman' esté instalada
echo "Verificando la instalación de 'Times New Roman'..."
if fc-list | grep -i "Times New Roman"; then
    echo "La fuente 'Times New Roman' está disponible."
else
    echo "La fuente 'Times New Roman' NO está disponible. Instalar manualmente."
    echo "Si tienes el archivo .ttf, puedes copiarlo a /usr/share/fonts/truetype/custom."
fi

# 5. Crear un directorio para fuentes personalizadas (si no lo has hecho manualmente)
echo "Creando directorio para fuentes personalizadas..."
mkdir -p /usr/share/fonts/truetype/custom
echo "Directorio de fuentes personalizadas creado."

# 6. Actualizar el caché de fuentes
echo "Actualizando caché de fuentes..."
fc-cache -fv
echo "Caché de fuentes actualizado."

# 7. Verificar que la fuente 'Times New Roman' esté correctamente registrada
echo "Verificando que la fuente esté correctamente registrada..."
fc-list | grep "Times New Roman"

echo "Proceso completado. Revisa los pasos anteriores para asegurar que no haya errores."
