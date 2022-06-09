FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive

RUN groupadd -r debrajthegod && \
    useradd -ms /bin/bash -r -g debrajthegod debrajthegod
RUN echo "debrajthegod:porsiempre" | chpasswd

RUN apt-get update && apt-get full-upgrade -y 

RUN apt-get install -y \
    apache2 \
    python3 \
    net-tools \
    git \
    wget \
    gcc \
    build-essential \
    vim \
    curl \
    libncurses5-dev \
    php

COPY ./site /var/www/html/site/
RUN sed -i 's/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www\/html\/site/' /etc/apache2/sites-available/000-default.conf
RUN rm -f /var/www/html/index.html
RUN echo "c23127f4d7e3f0f6d67{congo_you_captured_third_flag}" > /var/www/html/flag3.txt


# RUN echo "9cf41496f4e0567a64c7e15f6bdcc94a7b44771ac1f077dc5e364a1a196d8b04" > /var/www/html/secret.txt
RUN printf "I'm admin... You debrajthegod, your password was in clear text.\nSo, I put you clear text password in encrypted format.\nI putted your password in secret.txt" > /var/www/html/message.txt

WORKDIR /root
RUN echo "Flag 1 :  0b1cdb826f66e2ba{congo_you_captured_first_flag}" > root.txt
RUN chmod 600 /root/root.txt

WORKDIR /home/debrajthegod

RUN echo "Flag 2 : 3a2dc57ddf82de{congo_you_captured_second_flag}" > user.txt
RUN chmod 660 /home/debrajthegod/user.txt
RUN chown debrajthegod:debrajthegod /home/debrajthegod/user.txt

RUN wget "https://ftp.gnu.org/gnu/screen/screen-4.5.0.tar.gz"
RUN tar xzvf screen-4.5.0.tar.gz && rm screen-4.5.0.tar.gz
RUN mkdir -p /home/debrajthegod/local/etc
WORKDIR /home/debrajthegod/screen-4.5.0
RUN ./configure --prefix=/home/debrajthegod/local
RUN make install && install -m 644 /home/debrajthegod/screen-4.5.0/etc/etcscreenrc /home/debrajthegod/local/etc/screenrc
RUN echo 'export PATH="/home/debrajthegod/local/bin:$PATH"' >> /home/debrajthegod/.bashrc
WORKDIR /home/debrajthegod/
RUN rm -rf screen-4.5.0

RUN groupadd -r nova && \
    useradd -ms /usr/sbin/nologin -r -g nova nova

RUN chown -R www-data:www-data /var/www/html/*
RUN chmod 644 /var/www/html/*
RUN chmod 757 /var/www/html/site
RUN chmod 644 /var/www/html/site/*
# RUN chmod u+s /bin/bash

RUN find /home/debrajthegod -type d -exec chmod 750 {} \;
RUN find /home/debrajthegod -type f -exec chmod 650 {} \;
RUN chmod 700 /home/debrajthegod/local/bin/screen-4.5.0
RUN chown root:debrajthegod -R /home/debrajthegod/local
RUN chmod 4750 /home/debrajthegod/local/bin/screen-4.5.0


CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
RUN chsh -s /usr/sbin/nologin root
WORKDIR  /home/nova



# docker run -d --name "team1" -h team1.bwu.com  --rm  -p 172.31.11.251:5802:80  nmanish/easyctf