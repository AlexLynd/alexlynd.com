---
title: "Easy Data Exfiltration with CanaryTokens"
description: ""
lead: "Write your first data exfiltration payload in minutes with CanaryTokens & the USB Nugget!"
excerpt: ""
date: 2022-08-27T11:07:26-07:00
lastmod: 2022-08-27T11:07:26-07:00
draft: false
weight: 50
images: []
categories: ["CanaryTokens","DuckyScript","Data Exfiltration","USB Nugget"]
tags: []
contributors: ["Alex Lynd"]
pinned: false
homepage: false
---
<hr>

### Overview
If you're just getting started with data exfiltration, it might not be practical to set up an entire webserver or local environment just to try out some simple techniques, like web request exfiltration.

[In my Hak5 episode](), I created a simple proof-of-concept that uses an online tool called [CanaryTokens](), to demonstrate how simple it is to remotely exfiltrate a Linux password using a single command. 

Using a keystroke injection tool called the [USB Nugget](), I created a payload that demonstrates this attack in mere seconds - although you can follow along with just the data exfiltration portion of this tutorial, using a web browser.

### What You'll Need
- A computer (Linux preferable)
- [USB Nugget](https://usbnugget.com), or other DuckyScript device

<div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/T3szLSA83AU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<hr>

### What is Data Exfiltration?
Data exfiltration happens when a hacker needs to sneak sensitive data out of a compromised computer or network.  This can often be difficult to detect, since there's a variety of tricky obfuscation methods an attacker can use to disguise sensitive information as something less conspicuous.

### Hiding Data in Plain Sight: Web Traffic
One common method of data exfiltration involves hiding data inside of HTTP web traffic.  Since most network policies allow its users to browse the web, and since HTTP traffic (i.e. web requests) can usually comprise the majority of traffic on a network, it's hard to identify a single malicious source that's being used to exfiltrate data. 

In addition, data obfuscation methods like [steganography]() can make it even harder to identify that sensitive information is being stolen in plain sight, especially if used in conjunction with encryption methods.

<hr>

### Catching Hackers with CanaryTokens
[CanaryTokens]() is an awesome honeypot service developed by [Thinkst Canary]() that makes it easy to create bugged urls, documents, images, and more!  

Typically, these honeypots can be used to determine if a hacker is snooping through your system, by leaving a juicy looking target somewhere that's easy for them to find. Since most hackers aren't manually scanning through your filesystem for credentials and secrets, they'll often use a program to enumerate (and subsequently exfiltrate) specific file types like images or documents with keywords like *password* or *cryptocurrency*.

Thanks to CanaryTokens, it's pretty easy to detect this activity once the hacker opens one of these bugged formats, since the online service automatically triggers an alert via email.

![CanaryTokens website](canarytokens.png "You can create bugged images, Word documents, and more.") 

This blog is incomplete.  More updates coming soon!
<!-- ### Flipping the Script -->

<!-- ### User Agent Strings

`sudo apt install curl` -->