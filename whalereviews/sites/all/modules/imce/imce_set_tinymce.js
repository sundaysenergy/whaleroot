// $Id: imce_set_tinymce.js,v 1.1.2.4 2007/05/15 14:29:56 ufku Exp $
if (Drupal.jsEnabled) {
  $(window).load(imceInitiateTinyMCE);
}
function imceInitiateTinyMCE() {
  if ("undefined" != typeof(window.tinyMCE)) {
    for (var i=0; i<tinyMCE.configs.length; i++) {
      tinyMCE.configs[i]['file_browser_callback'] = 'imceImageBrowser';
    }
    setTimeout('for (var i in tinyMCE.instances) {var fE = tinyMCE.instances[i]["formElement"]; if (fE["tagName"]=="DIV") tinyMCE.instances[i]["formElement"] = fE.firstChild;}', 3000);//fix formElement issue of tinymce after 3sec. comment out this line if you use tinymce2.1 or above.
  }
}
var imceTinyWin, imceTinyField, imceTinyType, imceTinyURL;
function imceImageBrowser(field_name, url, type, win) {
  //if (type!='image') return;//work for only images
  var width = 640;
  var height = 480;
  var imcePopup = window.open(imceBrowserURL, '', 'width='+ width +', height='+ height +', resizable=1');
  imcePopup.focus();
  imceTinyWin = win;
  imceTinyField = win.document.forms[0].elements[field_name];
  imceTinyType = type;
  imceTinyURL = url;
}
