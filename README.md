# JS Component Examples
This repo includes an example for a custom module and also a custom theme to use the JS Component. These examples include a demo React App (using CRA) as a demo and can be replaced with your own JS application.


## Custom Module Example

Located: `/custom_module_example`

### How to use:
0. Download and enable the JS Component module (https://www.drupal.org/project/js_component).
1. Copy the `/custom_module_example` directory into your Drupal 8 site's custom module directory (`/modules/custom`).
2. Feel free to rename the custom module following the standard drupal naming convention and then rename the following files:
- `js_component_example.info.yml` to `<updated_module_name>.info.yml`
- `custom_theme_example.js_component.yml` to `<updated_module_name>.js_component.yml`
3. You can also customize the `Title` and `Description` within the `.info.yml` file.
4. Within the `/custom_module_example/components` directory is where I have organized the demo React apps.
5. You can either use the included demo react apps to start or replace them completely and use your own. app(s). Then you will need to update the `.js_component.yml` file to reference your custom JS app(s).
6. Once your apps are in-place you can test it by first enabling the custom module, then you can add your JS Component block to your site and then you will be able to see your JS Application.


## Custom Theme Example

Located: `/custom_theme_example`

### How to use with your custom theme:
0. Download and enable the JS Component module (https://www.drupal.org/project/js_component).
1. Copy the `/custom_theme_example/custom_theme_example.js_component.yml` file and paste it into your custom theme.
2. Rename the file from `custom_theme_example.js_component.yml` to `<your_custom_theme_name>.js_component.yml`
3. Update the `js_component.yml` file to use your JS Application JavaScript and CSS files.
4. Also in the same file update the title, description, and root_id.
5. You can also keep or tweak the settings or remove it completely (along with everything within settings).
6. Finally, you now can add your JS Component block to your site and then you will be able to see your JS Application.

### How to use just add this example to demo it in our:
0. Download and enable the JS Component module (https://www.drupal.org/project/js_component).
1. Copy the `/custom_theme_example` directory and paste it in your Drupal 8 site's custom themes directory (`/themes/custom`).
2. Enable the demo theme. This theme is bare bones and is only meant to demonstrate this module.
3. Add the JS Component block to your site. This is commonly done in the blocks manage page, where you can add it to your 'Content' region. After this is done then you can see the frontend of your site where you will now see a simple Create React App demo.


## Links & Resources:

Module page: https://www.drupal.org/project/js_component

The Elements API page: https://api.drupal.org/api/drupal/elements
- This can be used as a reference for the inputs used for JS Component settings.

Create React App: https://reactjs.org/docs/create-a-new-react-app.html


## Contributing

1. Fork it (<https://github.com/AtenDesignGroup/js_component_examples/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request


## License

[MIT](https://choosealicense.com/licenses/mit/)
