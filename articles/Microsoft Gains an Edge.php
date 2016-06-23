<!DOCTYPE html>

<?php $title = "article1"; ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "../articles/"; ?>

<html>

<head>
<title>Article 1</title>
<head>

<body>
<h1 style = "text-align: center">Alex Noto</h1>
<hr>

<h3>Microsoft gaining an Edge in the browser market?</h3>
<p>
Microsoft has been hard at work optimizing the newest version of its Edge browser, which will be debuting in the upcoming release of the Windows 10 Anniversary Update. Microsoft has built a controlled laboratory environment specifically for testing energy efficiency and power consumption on a variety of hardware, and it’s here that they have been optimizing the Edge browser, using such tools as Windows Event Tracing and a specialized Energy Estimation Engine.
<br>
<br>
The new Edge browser update will include several improvements, including more efficient loading of background tabs. I don’t fully understand the mechanics behind it, but evidently Javascript has a tendency to run in background tabs, which, when several tabs are open at a time, drastically increases CPU load. Microsoft has seen energy savings of over 90%. Flash will also run as a separate process, which according to Microsoft, gives Windows the ability to stop a crashed Flash process without affecting the browser. The cutting measures have even been extended to the user interface itself. Microsoft found that animations in the interface were consuming more resources than necessary and have changed the way the animations are processed. This has dropped the CPU impact to almost 0. Even networking itself has been improved by allowing the wifi antenna to be turned off sooner. All of these improvements add up to a new Edge browser that is vastly more efficient than the last release.
<br>
<br>
But is it too late? Has Microsoft already lost the browser race? There are several good browsers out there that have been performing better than Microsoft’s offerings and have been doing so for a very long time. In fact, Microsoft seems to have a habit of releasing poorly performing software and then scrambling to improve it when consumers report negative experiences and begin moving to other options. This was my experience, and the experience of others, with Windows 10 as a whole. It seemed like it was released perhaps a year too early, and it lacked support for much my laptop’s hardware. I’ve since moved to another option. But one of the most interesting and exciting aspects of the world of software is that it is always evolving. Perhaps Microsoft will debut a browser that will finally steal some of Chrome’s and Firefox’s thunder. There are more and more complaints of those browsers becoming bloated and clunky as well. The beauty of the free market is that competition encourages them all to continue improving. 
</p>

<?php include("../navigation/navigation.php"); ?>


</body>

</html>