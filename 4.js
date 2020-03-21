function longest(str) {
    let newStr = str.replace(/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/g,"")
    let strSplit = newStr.split(" ")
    let longWord = 0
    let longestWord
    for(let i = 0; i < strSplit.length; i++){
        if(strSplit[i].length > longWord){
        longWord = strSplit[i].length
        longestWord = strSplit[i]
        }
    }
    return longestWord
  }