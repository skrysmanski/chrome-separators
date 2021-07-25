# How to work on this project

The recommended development workflow is:

1. Use **Visual Studio Code** and **Docker Desktop**
1. Install the [Remote - Containers extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) (see recommended extension)
1. Open the **Command Palette** and choose **Remote-Containers: Reopen in Container**

This will give you a [development Docker container](https://code.visualstudio.com/docs/remote/containers) that contains all necessary tools (PHP, Node, Yarn) and that can be edited directly from within Visual Studio Code.

You can then start a webserver at port 8080 by calling `start-server.sh` via the **integrated terminal** in VSCode.

To rebuild the container, open the Command Palette and choose **Remote-Containers: Rebuild Container**.
