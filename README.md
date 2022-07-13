## Instructions 

Code for blocks are in `/assets/js/gutenberg/blocks` directory. 
For every block, create a subdirectory under `/assets/js/gutenberg/blocks`, and it just works (The block code will be auto loaded).
The only required file for a block is `block.json`. 

You can have an optional `render.php` file inside your block directory, for creating dynamic blocks. 
The `render.php` script will be provided `$attributes, $content, $block` parameters, and you just compose whatever you want to render for the dynamic block with those params. 