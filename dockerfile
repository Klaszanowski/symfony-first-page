FROM debian
LABEL Name=symfony-first-page Version=0.0.1
RUN apt-get -y update && apt-get install -y screenfetch
CMD ["screenfetch"]
