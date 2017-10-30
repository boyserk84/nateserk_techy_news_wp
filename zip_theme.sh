# Shell batch on Mac OSX for zip all theme's files.
#!/bin/bash
timestamp=$(date +%s)
echo "Zipping 'nateserk_techy_news' theme generated at timestamp=$timestamp \n";
STR_NAME="nateserk_techy_news"

if [ "$1" != "" ]; then
  if [ "$1" == "--rename" ]; then
    if [ "$2" != "" ]; then
      echo "[ Running ] Renaming 'nateserk_techy_news' to $2"
      if [[ "$OSTYPE" == "darwin"* ]];  then
        echo "[ Running ] Detecting 'macOSX'. Update 'rename' options. "
        # if running on mac OSX, we need -i '' and -e options.
        # Reference: http://stackoverflow.com/questions/19456518/invalid-command-code-despite-escaping-periods-using-sed
        grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="./export" 'nateserk_techy_news' . | xargs sed -i '' -e 's/nateserk_techy_news/'"$2"'/g'
      else
        grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="./export" 'nateserk_techy_news' . | xargs sed -i 's/nateserk_techy_news/'"$2"'/g'
      fi
      echo "[ Running ] Replacing content in 'style.css'."
      # Update content in style.css
      sed -i '' -e 's/nateserk_techy_news/'$2'/g' style.css

    else
      echo "[ Error ] Invalid --rename parameter. Abort!"
      exit
    fi
  else
    echo "[ Error ] Invalid command. Abort!"
    exit
  fi
  STR_NAME=$2
else
  echo "[ Warning ] No argument supplied. Archiving 'nateserk_techy_news.zip"
fi

echo "[ Running ] Archiving theme to '"$STR_NAME"'.zip "
sudo zip -r --exclude=zip_theme.sh --exclude=*.DS_Store* --exclude=export/* -X "export/$STR_NAME.zip" *
sudo rm ".DS_Store"
