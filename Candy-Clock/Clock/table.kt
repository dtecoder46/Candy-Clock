import java. io. File 
import java . io. InputStream
  
fun main() {
  val inputStream: InputStream = File ("Clock/candy.xml").inputStream() 
  val xml: String = inputStream.reader().use {it.readText()} 

  var xml_str: String = "" // read from XML file and put text into a string

  for (index in 0..(xml.length-1)) {
    var xml_char = xml[index];
    
    if (xml_char == '<' || xml_char == '>') {
      xml_str += "  "
    } else if (xml_char == '/') {
      xml_str += "|"
    } else {
      xml_str += xml_char
    }

    // filtering out unnecessary characters
  }

  val xml_list = xml_str.split(" ")
  var list_length = xml_list.size
  var list_string: String = ""

  for (index in 0..(list_length-1)) {
    var xml_lchar = xml_list[index]

    if (xml_lchar == "") {
      continue //removes any blank items of the array
    } else {
      list_string += xml_list[index] + "\n"
    }
  }

  val final_list = list_string.split("\n")

  var index = 0;

  println("| Trial  | Candies | ")

  while (index < final_list.size - 2) {
    // removing the duplicate key names
    // index < final_list.length ends the loop at the third-to-last index value

    println("| " + final_list[index] + " |   " + final_list[index+1] + "    |") // printing out just the first key copy and the value in table form

    index += 3;
  }
}