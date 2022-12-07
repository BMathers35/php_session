# php-session
Session management with PHP Class.

## **Start()**
Starts sessions. It works the same as the session_start() function.

###### **Start() Example:**
```
$Session = new Session();
$Session->Start();
```

## **Create($name, $value)**
Allows you to create or set a session value.

###### **Create() Example:**
```
$Session = new Session();
$Session->Start();
$Session->Create('test', 'This is a test message.');
```

## **Get($name)**
Lets you call the session value you created.

###### **Get() Example:**
```
$Session = new Session();
$Session->Start();
$Session->Create('test', 'This is a test message.');

$test = $Session->Get('test');
echo $test;
```
###### **Get() Result:**
> This is a test message.

## **Delete($name)**
Allows you to delete the session value you created.

###### **Delete() Example:**
```
$Session = new Session();
$Session->Start();
$Session->Create('test', 'This is a test message.'); // We create a new value.
$Session->Delete('test'); // We delete the value we created. The "test" value will no longer work.
```
