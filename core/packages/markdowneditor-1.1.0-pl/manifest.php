<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 John Peca

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.',
    'readme' => '## Why Markdown

Content, and content marketing, is critical today. Sometimes, though, the systems to create content get in the way, overwhelming users and offering too many options. 

Simple, intuitive tools like _Markdown Editor_ can make it easier to focus—to create sharp copy and to consistently use images and rich media. 

The [core philosophy of Markdown](http://daringfireball.net/projects/markdown/syntax#philosophy) is focused on ease of use: be as easy-to-read and easy-to-write as feasible. If you have mastered web surfing, can type, and know how to copy/paste links to websites, you possess the technical skills you need to use _Markdown Editor_. 

## How Markdown Editor Works

_Markdown Editor_ is a MODX Extra for creating content with [Markdown](http://daringfireball.net/projects/markdown/syntax). It parses Markdown-formatted text into HTML, and stores it as content for MODX websites.

_Markdown Editor_ is great for creating articles, quick blogs, instructions, lists, and any other articles that require writing. It is also great for more technical documents like code tutorials because it supports [Github Flavored Markdown](https://help.github.com/articles/github-flavored-markdown/), or “GFM”.

_Markdown Editor_ also supports embedding content from other sites just by inserting a simple link. No complex HTML or JavaScript code to deal with. To do this, it uses a technology called [oEmbed](http://www.oembed.com/). Inserting a simple link to sites like Twitter, Tumblr, MonoPrice, Amazon, Flickr, Vimeo, Youtube, Evernote, and dozens of more sites results in a beautifully formatted synopis “card” and link to those sites or images.

## Requirements
_Markdown Editor_ requires 

- MODX Revolution 2.3+
- PHP 5.4+

## Features
- Live preview
- Drag & drop upload
- Image cropper
- Full screen focused writing mode
- oEmbed through multiple services
- Resource suggestion on ctrl+space
- Parsing MODX tag in live preview
- Custom CSS for Manager preview
- Auto include GFM & Highlight on frontend

## Background
_Markdown Editor_ uses several libraries to deliver an amazing experience when editing Markdown content.

_Markdown Editor_ itself is build on top of the great JavaScript editor [Ace](http://ace.c9.io/). It uses a customized version of Ace’s Markdown mode to improve working with the Markdown content. It also has enhanced list support, drag & drop upload, and more.

When creating content, you can quickly insert a link based on MODX Resource page titles by pressing `cmd/ctrl` + `space`. This will show a list of matching pages below your cursor based on the next characters you type. Use the arrow keys and the enter key or mouse and click to choose the page. It will insert a properly formatted link to that page using the correct Markdown and MODX syntax.

For transforming markdown into HTML, _Markdown Editor_ uses the [Remarkable](https://github.com/jonschlinkert/remarkable) JavaScript library with a support for GFM. Remarkable transforms makrdown to HTML blazingly fast, so you can enjoy real live preview.

- [Ace Editor](http://ace.c9.io/)
- [Remarkable](https://github.com/jonschlinkert/remarkable)
- [Cropper](https://github.com/fengyuanchen/cropper)
- [DiffDOM](https://github.com/fiduswriter/diffDOM)

## Contribution
I would love to thank [Roman](https://twitter.com/@renekopcem) & [Ryan](https://twitter.com/@rthrash) for providing unmeasurable support, amazing ideas and for helping with styling the editor.

### Contributors
- [Roman Klos](https://twitter.com/@renekopcem)
- [Ryan Thrash](https://twitter.com/@rthrash)
- [All contributors](https://github.com/TheBoxer/markdown-editor/graphs/contributors)

## Show Your Support
If you enjoy using Markdown Editor, please consider supporting its ongoing development or showing thanks via [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FE62UABYW2V6S). 
Anything is appreciated!',
    'changelog' => '## MarkdownEditor 1.1.0
- Add HTML blocks help to docs
- Init jQuery in noConflict mode
- Fix text replication when inserting HTML
- Store markdown in Resource properties
- Fix error during loading MD editor when Resource content is removed from Resource panel
- Add system setting to custom init Markdown Editor
- Add titles for toolbar icons
- Highlight MODX tags in Markdown Editor
- Add modx as language for highlight rules in highlight.js

## MarkdownEditor 1.0.0
- Live preview
- Drag & drop upload
- Image cropper
- Resource suggestion on ctrl+space
- Parsing MODX tag in live preview
- Custom CSS for Manager preview
- Auto include GFM & Highlight on frontend',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '366d6ab5b9244660a0b647b0f235e1bc',
      'native_key' => 'markdowneditor',
      'filename' => 'modNamespace/5166aaf585a229d5cbb9d3647733a7e5.vehicle',
      'namespace' => 'markdowneditor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '90a42e74602088108eeeec960f546de7',
      'native_key' => 'markdowneditor.lp.parse_modx_tags',
      'filename' => 'modSystemSetting/933b9d22d22ded812f39806ed31786b5.vehicle',
      'namespace' => 'markdowneditor',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd6eb63ad9a627c218d70c9e3b2c658a0',
      'native_key' => 'markdowneditor.lp.parse_modx_tags_timeout',
      'filename' => 'modSystemSetting/1ec168631aed65c56f8f20737a0bc142.vehicle',
      'namespace' => 'markdowneditor',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b67aa66cbf778ce3e2acfb678a094489',
      'native_key' => 'markdowneditor.upload.image_upload_path',
      'filename' => 'modSystemSetting/9c095f99ef5e12de83f6095d620f5686.vehicle',
      'namespace' => 'markdowneditor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '375280bcc0d7376fd3d682cb5921d275',
      'native_key' => 'markdowneditor.upload.image_upload_url',
      'filename' => 'modSystemSetting/69b9abacd66d0abd1a59b6c9d48c40c2.vehicle',
      'namespace' => 'markdowneditor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f27bdde926d74dc262c2c66b65bf9206',
      'native_key' => 'markdowneditor.upload.file_upload_path',
      'filename' => 'modSystemSetting/503f0f4f65c50e9da56ef383634459ee.vehicle',
      'namespace' => 'markdowneditor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '43d5fb40e2a0949b5a237706c59e2a46',
      'native_key' => 'markdowneditor.upload.file_upload_url',
      'filename' => 'modSystemSetting/495e7c2383bd87df3672414937d8f726.vehicle',
      'namespace' => 'markdowneditor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65eb08419145e9abc12ff40605dfd4d0',
      'native_key' => 'markdowneditor.upload.under_resource',
      'filename' => 'modSystemSetting/1794261962282d991bfd4b8ba2f40c72.vehicle',
      'namespace' => 'markdowneditor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '41bafa1bd1136e846ebf19651d95c5ea',
      'native_key' => 'markdowneditor.upload.delete_unused',
      'filename' => 'modSystemSetting/a226d3e027eaa3399768cc9db57baaee.vehicle',
      'namespace' => 'markdowneditor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1ddfcba8e703c776dd0da29005f5b3fe',
      'native_key' => 'markdowneditor.upload.enable_image_upload',
      'filename' => 'modSystemSetting/a12eccaaac681fe62808c0a9185964ef.vehicle',
      'namespace' => 'markdowneditor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f2c250507b021299644c81716358f6d1',
      'native_key' => 'markdowneditor.upload.enable_file_upload',
      'filename' => 'modSystemSetting/98dd0deb3956ca596ba3a081c6c621a7.vehicle',
      'namespace' => 'markdowneditor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '527bb122717def95f8970037ae91d05d',
      'native_key' => 'markdowneditor.upload.max_size',
      'filename' => 'modSystemSetting/5b199d5a6a00269d3b3a2453f339fdf3.vehicle',
      'namespace' => 'markdowneditor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4eac4edcfa09511a8b1a7ab7f64955bc',
      'native_key' => 'markdowneditor.upload.image_types',
      'filename' => 'modSystemSetting/6c5792e0bf568dc0522aece1af3d4d88.vehicle',
      'namespace' => 'markdowneditor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e60ecf9a008b4753f461efd663229e3',
      'native_key' => 'markdowneditor.upload.file_types',
      'filename' => 'modSystemSetting/f74b90316859d3f85d3182c951c9b718.vehicle',
      'namespace' => 'markdowneditor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '56c7bbdb8ff39416331dfe472a1c6ec1',
      'native_key' => 'markdowneditor.cropper.enable_cropper',
      'filename' => 'modSystemSetting/ae3b714c1abf58dfcc932a9218b1b05a.vehicle',
      'namespace' => 'markdowneditor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3ded76673a97c0046dcceca296db5766',
      'native_key' => 'markdowneditor.cropper.show_description',
      'filename' => 'modSystemSetting/5096ba4d691954d10f31df1c920453c4.vehicle',
      'namespace' => 'markdowneditor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f146737220b9cfb54701c42ed567b05b',
      'native_key' => 'markdowneditor.cropper.profiles',
      'filename' => 'modSystemSetting/3d8f6983f7e40a371138aac95f2b0c85.vehicle',
      'namespace' => 'markdowneditor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a45e96c74900ac87944489ae5a7c3b82',
      'native_key' => 'markdowneditor.resizer.aspect_ratio_constraint',
      'filename' => 'modSystemSetting/685e0cbd4f902e3745db4c91c0515d7b.vehicle',
      'namespace' => 'markdowneditor',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '742df88f2127af4e30aaf8f4851d1a0f',
      'native_key' => 'markdowneditor.resizer.upsize_constraint',
      'filename' => 'modSystemSetting/b6f09fa2a8f2e86a3a4fd90624654f7b.vehicle',
      'namespace' => 'markdowneditor',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4f792610a420e45f3625639429000561',
      'native_key' => 'markdowneditor.resizer.width',
      'filename' => 'modSystemSetting/eeed5f8631a3b82a200fc275829d248c.vehicle',
      'namespace' => 'markdowneditor',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a528757ac700dea5d06610ecc7393d3',
      'native_key' => 'markdowneditor.resizer.height',
      'filename' => 'modSystemSetting/999c8027dcf09a4b6c5eb07ea9af0412.vehicle',
      'namespace' => 'markdowneditor',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a54d73003ba0ed73954136369f0fb9d1',
      'native_key' => 'markdowneditor.general.theme',
      'filename' => 'modSystemSetting/bd6b673906c18b86de1ff685c5e8bb60.vehicle',
      'namespace' => 'markdowneditor',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8680fa7191e14c465985664646d2fb86',
      'native_key' => 'markdowneditor.general.font_size',
      'filename' => 'modSystemSetting/c7662a263b15fec4e4fbe460d7ecf47d.vehicle',
      'namespace' => 'markdowneditor',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c437697cdf018f4c8cb661d3b43d5ef5',
      'native_key' => 'markdowneditor.general.font_family',
      'filename' => 'modSystemSetting/c54eafbfaae3eebd85ca60d7a9b8e92b.vehicle',
      'namespace' => 'markdowneditor',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd4022c629caa540548643edc6ea7f2bd',
      'native_key' => 'markdowneditor.general.include_ghfmd',
      'filename' => 'modSystemSetting/a9aba26cd818af4a6e77f75c1054c930.vehicle',
      'namespace' => 'markdowneditor',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '77539f56a333e7c39b640b1489833bfa',
      'native_key' => 'markdowneditor.general.include_ghfmd_manager',
      'filename' => 'modSystemSetting/832f7ff5f62e014d53219fbc7c8d55b0.vehicle',
      'namespace' => 'markdowneditor',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3485c7e7b8ba3f2ddf2aa9de7ce0cbe',
      'native_key' => 'markdowneditor.general.custom_css_manager',
      'filename' => 'modSystemSetting/c8504f7f9aee8799a1dcde5856144436.vehicle',
      'namespace' => 'markdowneditor',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5efbc5701728c9d742eebfea3e9c2c23',
      'native_key' => 'markdowneditor.general.include_highlight',
      'filename' => 'modSystemSetting/87e8de8d68deb8e12b9cfe9a29b5ecf9.vehicle',
      'namespace' => 'markdowneditor',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c4f363e8ea457b1a9272863e09ebcb71',
      'native_key' => 'markdowneditor.general.split',
      'filename' => 'modSystemSetting/382f98ce767d4788f2690bcaf76dde08.vehicle',
      'namespace' => 'markdowneditor',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0cee1bb1b8ca37b991899c6469d9390e',
      'native_key' => 'markdowneditor.general.split_fullscreen',
      'filename' => 'modSystemSetting/a40e876199cfecb62b6f2c47b7be0700.vehicle',
      'namespace' => 'markdowneditor',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3bcf79af4dc19f068c2262b102264aaf',
      'native_key' => 'markdowneditor.general.source',
      'filename' => 'modSystemSetting/2c2ad812b945e455b880c09d5f4be3b6.vehicle',
      'namespace' => 'markdowneditor',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f9bdfcddddbfeb1ef80f10a4f9a6017',
      'native_key' => 'markdowneditor.general.source_select',
      'filename' => 'modSystemSetting/646476a3b7504249dde7624415da7ba5.vehicle',
      'namespace' => 'markdowneditor',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b38d6f1ba0c98f88440676f3938fbe47',
      'native_key' => 'markdowneditor.oembed.service',
      'filename' => 'modSystemSetting/e16e1b2c77760967bb7c648c490de67b.vehicle',
      'namespace' => 'markdowneditor',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd57e6bfb8c9e03af60e05081c55e4914',
      'native_key' => 'markdowneditor.oembed.max_height',
      'filename' => 'modSystemSetting/f1cafe4adac448de2984a90d74bad525.vehicle',
      'namespace' => 'markdowneditor',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6378388d5568074aca9ce5a8090e2954',
      'native_key' => 'markdowneditor.oembed.max_width',
      'filename' => 'modSystemSetting/b5914940fed81b6694c5bac4c3c95c51.vehicle',
      'namespace' => 'markdowneditor',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3e6cd198876a20c290dafd2676b89fd0',
      'native_key' => 'markdowneditor.oembed.frontend_css',
      'filename' => 'modSystemSetting/956f8fe4c2f28873f780810ee4b2f475.vehicle',
      'namespace' => 'markdowneditor',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '456be14f3e294ef798f7120ed3010854',
      'native_key' => 'markdowneditor.oembed.default_card_color',
      'filename' => 'modSystemSetting/c77b8a717d9d62a63dc8d5f9f940f32b.vehicle',
      'namespace' => 'markdowneditor',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '514559ba22f199f00252e333938204cd',
      'native_key' => 'markdowneditor.oembed.auto_card_color',
      'filename' => 'modSystemSetting/8d3bcfb4b4c1832efeabec1a90d744e6.vehicle',
      'namespace' => 'markdowneditor',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1646a82e5844881beeba6352ede48db7',
      'native_key' => 'markdowneditor.embedly.api_key',
      'filename' => 'modSystemSetting/186996fb44ac99f352cf8ed693a8d882.vehicle',
      'namespace' => 'markdowneditor',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ce388d3c6cac6657aa8d3dbb40747d98',
      'native_key' => 'markdowneditor.init.condition',
      'filename' => 'modSystemSetting/8be61bbffe8b46545758f4b0f14a577e.vehicle',
      'namespace' => 'markdowneditor',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'a37a52ead1fee570b2f7a7afa401c3c7',
      'native_key' => NULL,
      'filename' => 'modCategory/c9dd06ff5ec932c3c7269af8b7aaa866.vehicle',
      'namespace' => 'markdowneditor',
    ),
  ),
);