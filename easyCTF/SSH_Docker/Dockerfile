FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive

RUN groupadd -r debrajthegod && \
    useradd -ms /bin/bash -r -g debrajthegod debrajthegod

RUN echo "debrajthegod:porsiempre" | chpasswd

RUN echo "root:porsiempre" | chpasswd

RUN apt-get update && apt-get install -y  openssh-server

RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config

# docker run --network segerated  -itd nmanish/ssh:latest /bin/bash  -c  '/etc/init.d/ssh start && /bin/bash '


# CMD ["/usr/sbin/sshd", "-D"]
# WORKDIR  /root
# CMD ["/etc/init.d/ssh", "start"]
# ENTRYPOINT [ "ENTRYPOINT" ,"service", "ssh", "restart"]

# /etc/init.d/ssh start
# docker network create --driver=bridge --subnet=10.0.0.0/24 segerated

