# PhpStorm File Templates
This repository contains file templates for PhpStorm for proper inclusion of documentation as well as scaffolds for
faster coding. The default file templates of PhpStorm are not including proper author nor license information, these
files solve this problem.

## Usage
Check out the repository to any place on your computer and edit the `<path-to-repo>/fileTemplates/includes/Author.vtl`
by entering your credentials, following is an example with my data.

```vtl
#set( $AUTHOR_NAME = 'Richard Fussenegger' )
#set( $AUTHOR_EMAIL = 'spam-me-not@fussenegger.info' )
#set( $AUTHOR_HOMEPAGE = 'http://richard.fussenegger.info/' )
```

After that create a `.vtl` file for each of your projects in the inclusion tab of your PhpStorm. Or simply create a
`.vtl` file in the folder right away. It is important that the `.vtl` file has the exact same file name as your project.
The following is an example project configuration.

```vtl
## $PROJECT_NAME = 'Awesome Project'
## <path-to-repo>/fileTemplates/includes/Awesome Project.vtl
#set( $PROJECT_COPYRIGHT   = $PROJECT_NAME )
#set( $PROJECT_DESCRIPTION = 'An awesome project like no other.' )
#set( $PROJECT_GITHUB      = 'https://github.com/Fleshgrinder/AwesomeProject' )
#set( $PROJECT_HOMEPAGE    = 'https://awesome-project.com/' )
#set( $PROJECT_KEYWORDS    = [ 'awesome' ] )
#set( $PROJECT_LICENSE     = 'AGPL-3.0' )
#set( $PROJECT_VERSION     = '0.1.0-dev' )
#set( $PROJECT_YEAR        = '2014-present' )
```

Not all variables from the example are currently used in the provided template files, but maybe in the future.

Afterwards compress the `fileTemplates` folder, `installed.txt`, and `IntelliJ IDEA Global Settings` into a `.zip` file
and rename it to `.jar`. Go to File > Import Settings… in your PhpStorm and select the previously generated `.jar` file.
It is important that the compressed file's content is not nested in any subfolders, check again is case PhpStorm tells
you that the file does not contain any settings.

That's it, you're good to go now.

## TODO
* Create tickets for the various bugs related to conditionals in template files.
* Create a program for easy generation of these files (either `.bat`, `.sh`, or even with Java).

## License
> This is free and unencumbered software released into the public domain.
>
> For more information, please refer to <http://unlicense.org>
