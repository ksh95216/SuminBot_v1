#!/bin/bash

sudo docker build -t sumin:1.0 .
sudo docker run -d -p 1020:80 -i -t sumin:1.0 /bin/bash
