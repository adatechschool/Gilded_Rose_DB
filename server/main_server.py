#!/usr/bin/env python

from server import *

server = Server('0.0.0.0', 9999)

while True:
    server.wait_and_thread()
