FROM php:7.4-cli
COPY . /usr/src/ai-bot
WORKDIR /usr/src/ai-bot
CMD [ "php", "./Dockerfile" ]
