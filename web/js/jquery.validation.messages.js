jQuery.extend(jQuery.validator.messages, {
    required: "Ce champ est obligatoire.",
    remote: "Réparez ce champ.",
    email: "Entrez un email valide.",
    url: "Entrez une URL valide.",
    date: "Entrez une date valide.",
    dateISO: "Entrez une date ISO valide.",
    number: "Entrez un nombre valide.",
    digits: "Entrez un numéro valide.",
    creditcard: "Entrez une carte de crédit valide.",
    equalTo: "Entrez la même valeur une fois de plus.",
    accept: "Entrez une valide avec une extension valide.",
    maxlength: jQuery.validator.format("N'entrez pas plus de {0} caractères."),
    minlength: jQuery.validator.format("Entrez au moins {0} caractères."),
    rangelength: jQuery.validator.format("Entrez une valeur entre {0} et {1} de caractères de long."),
    range: jQuery.validator.format("Entrez une valeur entre {0} and {1}."),
    max: jQuery.validator.format("Entrez une valeur inférieure ou égale à {0}."),
    min: jQuery.validator.format("Entrez une valeur supérieure ou égale à {0}.")
});