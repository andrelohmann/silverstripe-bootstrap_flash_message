# silverstripe bootstrap flash message

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Requirements

Silverstripe 4.0.0

## Introduction

Allow to create flash messages with bootstrap alert UI

## Installation

Just install the module folder into your silverstripe root and add the following to your Template
```
<% include BootstrapFlashMessage %>
```

## Usage

Inside your logic you can use set your Flashmessage the following way:
```
BootstrapFlashMessage::set('Your Message', 'TYPE');
```
Type can set to one of the following types:
```
success, info, warning, danger
```
