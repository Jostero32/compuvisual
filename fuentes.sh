#!/bin/bash

# Verifica si la carpeta fonts existe
if [ ! -d "fonts" ]; then
  echo "La carpeta 'fonts' no existe. Asegúrate de tener los archivos .ttf en una carpeta llamada 'fonts'."
  exit 1
fi

# Crear directorio para fuentes personalizadas si no existe
sudo mkdir -p /usr/share/fonts/truetype/custom

# Copiar todos los archivos .ttf de la carpeta 'fonts' al directorio de fuentes personalizadas
echo "Instalando fuentes..."
sudo cp fonts/*.ttf /usr/share/fonts/truetype/custom/

# Actualizar la caché de fuentes
echo "Actualizando caché de fuentes..."
sudo fc-cache -fv

# Verificar que las fuentes se hayan instalado correctamente
echo "Verificando fuentes instaladas..."
fc-list | grep -i "times new roman" || echo "La fuente 'Times New Roman' no está disponible."

echo "Instalación completada."
