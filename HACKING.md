# How to work on this project

## Setup

The recommended development workflow is:

1. Use **Visual Studio Code** and **Docker Desktop**
1. Install the [Remote - Containers extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) (see recommended extension)
1. Open the **Command Palette** and choose **Remote-Containers: Reopen in Container**

This will give you a [development Docker container](https://code.visualstudio.com/docs/remote/containers) that contains all necessary tools (PHP, Node, Yarn) and that can be edited directly from within Visual Studio Code.

## Running the Development Web Server

You can then start a development web server by calling the following via the **integrated terminal** in VSCode. (In the "Terminal" window, simply click the "+" button.)

```bash
./start-server.sh
```

The web site is then reachable via: <http://localhost:8080>

To stop the web server again, hit `Ctrl + C`.

## Rebuild Dev Container

To rebuild the container, open the Command Palette and choose **Remote-Containers: Rebuild Container**.
