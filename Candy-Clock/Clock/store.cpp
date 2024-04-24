#include <iostream>
#include <fstream>
#include <string>
using namespace std;

int main() {
  string candy;
  string candy_count;
  string entry;
  string past_xml;
  string past_xml2;
  int entry_int;
  int entries_num = 1;

  ifstream entry_file("Clock/entry.txt");

  // reads number of entries from entry.txt, converts to int, adds to entries_num
  while (getline(entry_file, entry)) {
    entry_int = stoi(entry);
    entries_num += entry_int;
  }
  
  ifstream file("Clock/candy.txt");

  // reads the candy number from candy.txt
  while (getline (file, candy)) {
    candy_count = candy;
  }

  ifstream xml_prev("Clock/candy.xml");

  while (getline (xml_prev, past_xml)) {
    past_xml2 += past_xml; // Fetches previous XML text
  }
  
  ofstream xml_file("Clock/candy.xml");

  string xml_text = "<candy" + to_string(entries_num) + ">" + candy_count + "</candy" + to_string(entries_num) + ">"; // xml syntax with number of candies

  xml_file << past_xml2 + xml_text; // write to file with previous XML text (otherwise the new XML would overwrite the previous one)

  ofstream entry_file2("Clock/entry.txt");

  entry_file2 << entries_num; // write new entry num to file
  
  // Close the files
  file.close();
  xml_file.close();
  entry_file.close();
  entry_file2.close();
  xml_prev.close();
}