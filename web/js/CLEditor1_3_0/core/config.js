// Defines a toolbar with only one strip containing the "Source" button, a
// separator and the "Bold" and "Italic" buttons.
config.toolbar = [
    [ 'Source', '-', 'Bold', 'Italic' ]
];

// Similar to example the above, defines a "Basic" toolbar with only one strip containing three buttons.
// Note that this setting is composed by "toolbar_" added by the toolbar name, which in this case is called "Basic".
// This second part of the setting name can be anything. You must use this name in the CKEDITOR.config.toolbar setting,
// so you instruct the editor which toolbar_(name) setting to use.
config.toolbar_Basic = [
    [ 'Source', '-', 'Bold', 'Italic' ]
];
// Load toolbar_Name where Name = Basic.
config.toolbar = 'Basic';
