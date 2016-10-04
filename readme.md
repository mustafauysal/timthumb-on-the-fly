# timthumb-on-the-fly
Image resizing with old school technique.



## Installation
1. Clone repository `git clone git@github.com:mustafauysal/timthumb-on-the-fly.git`
2. Install timthumb package via  `composer install`
3. Make configuration in index.php
4. (optional) Symlink to media directiory `ln -s /var/www/mywebsite/public/uploads/ uploads`


## Usage 
For example you installed for `assets.example.com` now ready to go resizing: 
`http://assets.example.com/uploads/sample.jpg?w=400&h=200`

[Parameters](https://www.binarymoon.co.uk/2012/02/complete-timthumb-parameters-guide/)

[Original documentation](http://binarymoon.co.uk/projects/timthumb)

## FYI

You should know timthumb have [abandoned](https://www.binarymoon.co.uk/2014/09/timthumb-end-life/) but it just works :) If you have concern, you can try other alternatives.

