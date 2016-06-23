function printLines(lines) {
    for (let i = 0; lines[i] != "Stop"; i++) {
        console.log(lines[i]);
    }
}

printLines(['line 1', 'line 2', 'Stop']);