#!/usr/bin/env python

import threading
from socket import *

class Server(socket):
    def __init__(self, ip, port, backlog = 0): 
        super().__init__(AF_INET, SOCK_STREAM)

        self.bind_ip = ip
        self.bind_port = port

        self.bind((self.bind_ip, self.bind_port))
        self.listen(backlog)

        print(f'Listening on {self.bind_ip}:{self.bind_port}')

    def handle_client_connection(client_socket):
        client_socket.send(b"Hello world")
        client_socket.close()

    def wait_and_thread(self):
        client_sock, address = self.accept()
        print(f'Accepted connection from {address[0]}:{address[1]}')
        client_handler = threading.Thread(
                target=Server.handle_client_connection,
                args=(client_sock,)
                ).start()
