# Small Messages
> Simple plugin to manage frontend and backend messages


## Installation

**GitHub** clone into `/plugins` dir:

```sh
git clone https://github.com/jan-vince/smallmessages
```

**OctoberCMS backend**

Just look for 'Small Messages' in search field in:
> Settings > Updates & Plugins > Install plugins

### Permissions

> Settings > Administrators

You can set permissions to restrict access to *Settings > Small plugins > Small Messages* and to messages list.


## Quick start guide

* Install plugin.

* Go October's backend Settings and choose Small Messages.
  * Select your prefered UI style and optionally add Close button's text.

* Go October's backend and choose Messages from main menu.
  * Create new Message and set it as Active (you can also set dates from/to and choose to control messages window by cookie).

* Go to CMS part of October.
  * Add new o use existing Layout, Page or Partial.
  * Add component Small Messages > messages (inside of your `body` tag).

> Do not forget to add `{% scripts %}` tag to your layout page just before closing `body` tag! More info [in October docs](https://octobercms.com/docs/markup/tag-scripts).

* Open your website - message should be visible.



## Components

### Messages

Should be used in your Layout, Page or Partial.

#### Hide messages box

If you need to hide Messages box on specific Partial, Page or Layout, you can use [View Bag](https://octobercms.com/docs/cms/components#viewbag-component) on your Page this way:

```
[viewBag]
hideMessagesBox = 1
```


## HOWTO

### Get list of messages

With component attached you can get messages list by `{{ messages.items }}`.

### Your custom messages box design

If you want your custom messages box design just create folder and file `messages` in `/themes/[your-theme-name]/partials/messages/default.htm` and put your code. 

> If you changed default alias of Messages component (which is `messages`) you have to change also folder name!

For default code you can look in `/plugins/janvince/smallmessages/components/messages`.


----
> My thanks goes to:    
> [OctoberCMS](http://www.octobercms.com) team members and supporters for this great system.   
> []() for her photo.   
> [Font Awesome](http://fontawesome.io/icons/) for nice icons.

Created by [Jan Vince](http://www.vince.cz), freelance web designer from Czech Republic.



