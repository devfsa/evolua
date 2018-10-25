#include <iostream>
#include <string>
#include <unordered_set>

using namespace std;

void first_recurrence(const std::string& str) {
    unordered_set<char> values;
    
    for (auto c : str) {
        if (values.count(c)) {
            cout << c << endl;
            return;
        } else {
            values.insert(c);
        }
    }
    cout << "null" << endl;
}

int main() {
	string str;
	getline(cin, str);
    first_recurrence(str);
    return 0;
}
