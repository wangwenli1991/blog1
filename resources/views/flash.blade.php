html<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="xxx">
    <a href="https://laravel.com/docs/5.6/session#flash-data" target="_blank">flash 存储数据</a>
    <textarea name="" id="" cols="240" rows="10">Flash数据
有时您可能希望仅在下一个请求中将项目存储在会话中。您可以使用该flash方法执行此操作。使用此方法存储在会话中的数据仅在后续HTTP请求期间可用，然后将被删除。Flash数据主要用于短期状态消息：

$request->session()->flash('status', 'Task was successful!');
如果您需要保留闪存数据以满足多个请求，您可以使用该reflash方法，该方法将保留所有闪存数据以获取其他请求。如果您只需要保留特定的闪存数据，您可以使用以下keep方法：

$request->session()->reflash();

$request->session()->keep(['username', 'email']);</textarea>
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="button" value="submit">

</form>
</body>
</html>