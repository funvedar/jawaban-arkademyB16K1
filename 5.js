function groupNumber(str) {
	let newStr = str.replace(/\D/g,"")
	let i = 0
	let j = 3
	let arr = []
	let array
	let temp
	while(i < newStr.length) {
		string = newStr.slice(i,j)
		arr.push(string)
		i += 3
		j += 3
	}
	stringJoin = arr.join("-")
	if (stringJoin.length % 4 == 1) {
		array = stringJoin.split("")
		temp = array[array.length-2]
		array[array.length-2] = array[array.length-3]
		array[array.length-3] = temp
		result = array.join("")
	}
	return result
}