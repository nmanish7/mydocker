FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
ENV HOME /home/user
RUN groupadd -r user && \
    useradd -ms /bin/bash -r -g user user


RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    python3 \
    python3-pip \
    wget \
    git \
    curl

RUN mkdir /home/user/twint
WORKDIR /home/user/twint
USER user
RUN whoami
RUN pip3 install --user --upgrade git+https://github.com/twintproject/twint.git@origin/master#egg=twint
RUN echo "export PATH=$PATH:/home/user/.local/bin" >> ~/.bashrc
