import java.util.HashSet;
import java.util.Set;

class FirstRecurrence{
    public static Character firstRecurrence(String word){
        Set<Character> uniqueChars = new HashSet<>();

        return word.chars()
                .mapToObj(ch -> (char) ch)
                .dropWhile(uniqueChars::add) // Filtra caracteres não repetidos
                .findFirst()
                .orElse(null);
    }

    public static void main(String[] args) {
       Character result = FirstRecurrence.firstRecurrence(args[0]);
       System.out.println(result);
    }
}