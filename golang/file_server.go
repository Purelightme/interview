package main
import (
    "net/http"
    "fmt"
)
func main() {
    http.Handle("/", http.FileServer(http.Dir(".")))
    http.HandleFunc("/hello",func(res http.ResponseWriter,req *http.Request){
        fmt.Fprintf(res,"hello")
    })
    http.ListenAndServe(":8088", nil)
}
