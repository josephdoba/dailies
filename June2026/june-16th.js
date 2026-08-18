const printTheKeys = {a: "H", b: "e", c: "l", d:"l", e: "o", f: " ", g:"W", h: "o", i: "r", j: "l", k: "d"}

const loopThroughDict = (dict) => {
    let result = ""
    for (letter of Object.keys(dict)){
        result += dict[letter]
    }
    console.log(result)
    return result
}

loopThroughDict(printTheKeys)