# Theme Options

## The Settings API Defined

At the most basic level, the Settings API is a set of functions provided by WordPress that simplifies the process of introducing menus, option pages, and the saving, validating, and retrieving of user input.

## Why should we use the Settings API?
Now that we understand what the Settings API actually is, we need to look at why we'd want to use this as opposed to handle user input, serialization, and validation all on our own.

## On Sections, Fields, and Settings
Before we get into writing any code, it's important to understand the three main components of the WordPress Settings API.

1. Fields are individual options that appear on menu pages. Fields correspond to actual elements on the screen. That is, a field is managed by a text box, radio button, checkbox, etc. Fields represent a value stored in the WordPress database.
2. Sections are a logical grouping of fields. Whenever you're working with multiple fields, you're likely going to be grouping related options together - Sections represent this grouping. Furthermore, if your work includes multiple administration pages, each section often corresponds to its own menu page (though you can also add them to existing sections).
3. Settings are registered after you've defined both Fields and Sections. Think of Settings as a combination of the Field and the Section to which it belongs.