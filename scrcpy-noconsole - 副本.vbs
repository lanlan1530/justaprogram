strCommand = "php -S 0.0.0.0:8080 -t C:\Users\Administrator\Downloads\justaprogram-main"

For Each Arg In WScript.Arguments
    strCommand = strCommand & " """ & replace(Arg, """", """""""""") & """"
Next

CreateObject("Wscript.Shell").Run strCommand, 0, false
