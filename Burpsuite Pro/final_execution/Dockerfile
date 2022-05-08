FROM nmanish/burpsuite:0.2

LABEL maintainer="nmanish"

ENV HOME /home/burp/mapped

USER burp
WORKDIR /home/burp/mapped

RUN printf '#!/usr/bin/env sh\n\nburpsuite > nul &\n sleep 4\nclear\n/bin/bash' > /home/burp/startup

RUN chmod +x /home/burp/startup

# CMD [ "bash", ";", "burpsuite", ">", "nul", "&" , "sleep" , "4", ";", "clear", ";", "ls", ";", "clear"]

# RUN history -c
CMD ["/home/burp/startup"]

# mkdir -pm 777 /tmp/map_burp && docker run --rm -v /tmp/map_burp:/home/burp/mapped -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY nmanish/burpsuite:0.1

mkdir -pm 777 /tmp/burp && docker run -v /tmp/burp:/home/burp/mapped --security-opt=no-new-privileges -it -v /tmp/.X11-unix:/tmp/.X11-unix -e DISPLAY=$DISPLAY --net=host nmanish/burpsuite:0.3