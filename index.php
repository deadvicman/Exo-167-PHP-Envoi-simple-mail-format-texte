<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */
$from = 'victorien.bail@gmail.com';
$subject = 'Mon super mail';
$to = 'deadvicmangame@gmail.com';
$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.
mail($to, $subject, $message, $from);

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.
$message = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada, magna ut feugiat congue, est purus congue magna, id tincidunt elit magna non metus. Donec auctor, magna eu egestas suscipit, sapien eros congue ligula, at suscipit augue massa id magna.";
$message = wordwrap($message, 70);
if (mail($to, $subject, $message)) {
    echo "Le message a bien été envoyé. Merci !";
    $file=fopen("mails.txt","a");
    fwrite($file,"$message $to");
    fclose($file);
} else {
    echo "Une erreur est survenue lors de l'envoi du mail";
}