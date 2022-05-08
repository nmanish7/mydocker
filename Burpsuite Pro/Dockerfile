# FROM ubuntu:22.04
FROM openjdk:11-jre-slim

LABEL maintainer="nmanish"

ENV DEBIAN_FRONTEND=noninteractive

RUN groupadd -r burp && \
    useradd -ms /bin/bash -r -g burp burp

ENV HOME /home/burp

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    # openjdk-11-jdk \
    libatk1.0-dev \
    libatk-bridge2.0-0 \
    libxkbcommon-dev \
    libxcomposite-dev \
    libxdamage-dev \
    libxrandr-dev \
    libgbm-dev \
    libpango1.0-0 \
    libcairo-dev \
    libxtst-dev \
    libasound2 \
    libcups2 \
    libnss3 \
    libnspr4 \
    nano  && \
    apt-get autoremove && \
    apt-get clean all && \
    apt-get clean


RUN mkdir /opt/burpsuitepro

WORKDIR /opt/burpsuitepro

COPY burpsuite.jar /opt/burpsuitepro
COPY keygen.jar /opt/burpsuitepro
COPY loader.jar /opt/burpsuitepro

RUN chmod 755 /opt/burpsuitepro/* 

# Activate Burpsuite Manually:

#============================#

RUN printf '#!/usr/bin/env sh\n\njava --illegal-access=permit -Dfile.encoding=utf-8 -javaagent:/opt/burpsuitepro/loader.jar -noverify -jar /opt/burpsuitepro/burpsuite.jar "$@"\n' > /usr/bin/burpsuite;
RUN printf '#!/usr/bin/env sh\n\njava -jar /opt/burpsuitepro/keygen.jar "$@"\n' > /usr/bin/activate-burp;


RUN chmod 755 /usr/bin/burpsuite;
RUN chmod 755 /usr/bin/activate-burp;


# Installing Wordlists:
WORKDIR /usr/share

COPY ./wordlists /usr/share/wordlists/


RUN chmod 755  -R /usr/share/wordlists


WORKDIR /usr/bin
COPY bin/wordlists /usr/bin/
COPY bin/kali-treecd /usr/bin/

# Giving Executable Permissions:

RUN chmod 755 /usr/bin/wordlists
RUN chmod 755 /usr/bin/kali-treecd

RUN chsh -s /usr/sbin/nologin root

# Mapped Directory:
RUN mkdir /home/burp/mapped

RUN chown burp:burp /home/burp/mapped

RUN chmod 777 -R /home/burp/mapped

USER burp
WORKDIR /home/burp/mapped




# Simple Command to Activate and Setup your docker:

# docker build -t namnish/burpsuite:0.1 .

# mkdir -pm 777 /tmp/map_burp && docker run -u root -v /tmp/map_burp:/home/burp/mapped -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY nmanish/burpsuite:0.3 /bin/bash

# mkdir -pm 777 /tmp/map_burp && docker run -v /tmp/map_burp:/home/burp/mapped -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY nmanish/burpsuite:0.3 /bin/bash


# Do these steps Manually:

# RUN chmod root:root /home/burp/.BurpSuite/burpbrowser/96.0.4664.45/chrome-sandbox

# RUN chmod 4755 /home/burp/.BurpSuite/burpbrowser/96.0.4664.45/chrome-sandbox

#  sudo docker create -u root -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY namnish/burpsuite:0.3 /bin/bash

#  sudo docker create -u root --cap-drop=ALL --cap-add=SYS_ADMIN --cap-add=SYS_CHROOT --security-opt=no-new-privileges:true -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY namnish/burpsuite:0.3 /bin/bash

#  sudo docker create -u root --cap-add=SYS_ADMIN -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY namnish/burpsuite:0.3 /bin/bash

