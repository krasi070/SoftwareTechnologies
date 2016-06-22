function getCapitalCaseWords(arr) {
    let capitalCaseWords = arr.join(',').split(/\W+/).filter(w => w != "" && w == w.toUpperCase());
    console.log(capitalCaseWords.join(", "));
}

getCapitalCaseWords(['PHP, Java and HTML']);