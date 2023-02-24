# Image de base
FROM debian:jessie

# Installation de curl avec apt-get
RUN apt-get update \
    && apt-get install -y curl \
    && rm -rf /var/lib/apt/lists/*

# Installation de node.js à partir du site officiel
RUN curl -LO "https://nodejs.org/dist/v0.12.5/node-v0.12.5-linux-x64.tar.gz" \
    && tar -xzf node-v0.12.5-linux-x64.tar.gz -c /usr/local --strip-components=1 \
    && rm node-v0.12.5-linux-x64.tar.gz

#Ajout du fichier de dépendances package.json
ADD package.json /app/

# Changement du repertoire
WORKDIR /app

# Installation des dépendances
RUN npm install

# Ajout des sources
ADD . /app/

#Port 3000
EXPOSE 3000

#On partage les logs
VOLUME /app/log

# on lance le serveur quand on demarre le conteneur
CMD node server.js