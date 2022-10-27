<?php

    // Parcours de tous les fichiers d'un dossier 

    $importFolderName = 'mac_urls';
    $exportFolderName = 'win_urls';    

    #$importFolder = opendir($importFolderName);


   // $listItemCounter = 1;
    //$newText = "";

    // Fonction n°1 : newLine

    function newLine($numberOfLines)
    {
        for ($i=1 ; $i<=$numberOfLines; $i++)
        {
            echo "\n" ;
        };
       
    }
    
    // Fonction n°2 : displaySectionTitle

    function displaySectionTitle($sectionTitle)
    {
        newLine(1);
        echo "$HSEPARATOR";
        newLine(1);
        echo "$sectionTitle";
        newLine(1);
    }

    // Fonction n°3 : checkFolder
    
    function checkFolder($folderName)
    {
        if (!file_exists($folderName) && !is_dir($folderName)) 
        {
            echo "Le dossier [$folderName] n'existe pas.";
            nl(1);
            mkdir($folderName, 0755, true);
            echo "Le dossier [$folderName] a été créé.";
            nl(1);
        } else {
            echo "Le dossier [$folderName] existe.";
            nl(1);
        }
    }






    displaySectionTitle("Vérification dossiers d'import [$importFolderName] :");
    displaySectionTitle("Vérification dossiers d'export [$exportFolderName] :");




/*

    if (!file_exists($importFolderName) && !is_dir($importFolderName)) 
    {
        echo "Le dossier [$importFolderName] n'existe pas.";
        nl(1);
        mkdir($importFolderName, 0755, true);
        echo "Le dossier [$importFolderName] a été créé.";
        nl(1);
    } else {
        echo "Le dossier [$importFolderName] existe.";
        nl(1);
    }
    // Existence du fichier ou du dossier ET Détermination : fichier ou dossier ?

    nl(1);
    echo "Existence du fichier ou du dossier ET Détermination : fichier ou dossier ? - [$importFolderName]";
    nl(1);

    // importFolderName
    if (!file_exists($importFolderName) && !is_dir($importFolderName)) 
    {
        echo "Le dossier [$importFolderName] n'existe pas.";
        nl(1);
        mkdir($importFolderName, 0755, true);
        echo "Le dossier [$importFolderName] a été créé.";
        nl(1);
    } else {
        echo "Le dossier [$importFolderName] existe.";
        nl(1);
    }

    nl(1);
    echo "Existence du fichier ou du dossier ET Détermination : fichier ou dossier ? - [$exportFolderName]";
    nl(1);

    // exportFolderName
    if (!file_exists($exportFolderName) && !is_dir($exportFolderName)) 
    {
        echo "Le dossier [$exportFolderName] n'existe pas.";
        nl(1);
        mkdir($exportFolderName, 0755, true);
        echo "Le dossier [$exportFolderName] a été créé.";
        nl(1);
    } else {
        echo "Le dossier [$exportFolderName] existe.";
        nl(1);
    }
    

    /*
    // Existence du fichier ou du dossier
    nl(1);
    echo "*** 1. Existence du fichier ou du dossier ***";
    nl(1);
    echo (!file_exists($importFolderName)) ? "Le fichier ou le dossier [$importFolderName] n'existe pas." : "Le fichier ou le dossier [$importFolderName] existe.";
    nl(2);

    // Détermination : fichier ou dossier ?
    echo "*** 2. Détermination : fichier ou dossier ? ***";
    nl(1);
    echo (!is_dir($importFolderName)) ? "[$importFolderName] est un fichier." : "[$importFolderName] est un dossier.";
    nl(1);
    */

    //echo (!file_exists($importFolderName)) ? "Le dossier n'existe pas" : "Le dossier existe";

/*
    echo "\n";

    while($importFile = readdir($importFolder)){
        if($importFile != '.' && $importFile != '..')
        {
            // Affichage des fichiers à convertir
            echo $separator;
            echo "\n";
            echo "Fichier n°" . $listItemCounter . " :\n";
            echo $importFile."\n";
            // Récupération du contenu du fichier dans la variable $originalText
            $importPath = $importFolderName . $importFile;
            $originalText = file_get_contents($importPath);
            echo "Contenant :\n\n";
            echo $originalText;
            echo "\n";
            
            // Extraction du texte compris entre les balises <string> et </string> dans la variable $extractedText
            preg_match('/<string>(.*?)<\/string>/s', $originalText, $extractedText);
            
            // Préparation du nouveau texte
            $newTextLine1 = "[InternetShortcut]\n";
            $newTextLine2 = "URL=";
            $newText = "";
            $newText .= $newTextLine1;
            $newText .= $newTextLine2;
            $newText .= $extractedText[1];
            $newText .= "\n";

            // Écriture du nouveau texte dans un fichier
            $exportFile = str_replace('webloc', 'url', $importFile);
            $exportPath = $exportFolderName . $exportFile;
            file_put_contents($exportPath, $newText);
            echo "Converti en :\n";
            echo $exportFile."\n\n\n";
            echo "Contenant :\n\n";
            echo $newText;
            echo "\n\n";
            
            // Incrémentation du compteur de la liste des fichiers
            $listItemCounter += 1;
        }
    }

    echo $separator;

    closedir($importFolder);
*/

?>