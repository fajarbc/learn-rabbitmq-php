# learn-rabbitmq-php
Learn RabbitMQ with PHP


**INSTALLATION**
My notes on installing RabbitMQ in Windows:
I Follow the steps from https://www.rabbitmq.com/install-windows.html

* Open RabbitMQ Terminal
1. Open terminal (Command Prompt or PowerShell)
2. Change directory to RabbitMQ Server sbin folder
```
cd C:\Program Files\RabbitMQ Server\rabbitmq_server-{version}\sbin
```
Note: change {version} according to your installed RabbitMQ Server version, for example the version is **3.8.18**. So the code would look like:
```
cd C:\Program Files\RabbitMQ Server\rabbitmq_server-3.8.18\sbin
```
Or you can simply search for RabbitMQ Command Prompt
![image](https://user-images.githubusercontent.com/31872453/125531539-924a7e8d-9606-45c3-83f3-408e2ff4884e.png)


* Start RabbitMQ Service
```
rabbitmq-service start
```


* Stop RabbitMQ Service
```
rabbitmq-service stop
```
Or you can just simply search for RabbitMQ in your computer
![image](https://user-images.githubusercontent.com/31872453/125532485-2d38e9fc-fdad-4ef1-a0ae-0d91719ee678.png)


* Enable RabbitMQ UI Management
After install finished, in order to **enable the RabbitMQ UI Management** that runs onhttp://localhost:15672 you should do the following:
```
rabbitmq-plugins.bat enable rabbitmq_management
```

**RUN THE SCRIPTS**
In this project directory
1. Before you run the sript, please make sure you have `composer` installed in your machine and have all the dependency needed. You can type `composer update` in your terminal.
2. There are 2 scripts, send.php to send the queue message and receive.php to receive the queue message.
3. Open 2 separate terminals. I assume that **php** command is can be used in your environment.
4. Run the **receive.php**
```
php receive.php
```
6. Run the **send.php** 
```
php send.php
```
![image](https://user-images.githubusercontent.com/31872453/125533831-d9d9fc86-ad17-43b3-9c0a-6b440f3ff20c.png)

You can also run send.php through your browser if there is an active webserver
![image](https://user-images.githubusercontent.com/31872453/125533911-fb7574f4-2580-49f9-8131-c025b942fcdc.png)
