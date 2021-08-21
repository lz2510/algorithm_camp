package main

import "fmt"

func reverseStr(s string, k int) string {
	var res = []byte(s)
	for start := 0; start < len(s); start += 2 * k {
		i := start
		var j int
		if (start + k - 1) < len(s)-1 {
			j = start + k - 1
		} else {
			j = len(s) - 1
		}
		for i < j {
			tmp := s[i]
			res[i] = s[j]
			res[j] = tmp
			i++
			j--
		}
	}
	return string(res)
}

func main() {
	fmt.Println(reverseStr("abcdefg", 2))
}
