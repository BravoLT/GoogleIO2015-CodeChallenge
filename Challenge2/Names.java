import java.util.HashMap;
import java.io.FileReader;
import java.io.BufferedReader;
import java.io.IOException;

/*
 * Compile (requires Java 8 or higher):
 * javac Names.java
 *
 * Run:
 * java -cp . Names test_input.txt
 */
public class Names {
  public static void main(String[] args) {
    if (args.length == 0) {
      System.err.println("Missing file command line argument");
      System.exit(1);
    }
    HashMap<String, Name> names = new HashMap<>();
    try (BufferedReader in = new BufferedReader(new FileReader(args[0]))) {
      String nameStr;
      while ((nameStr = in.readLine()) != null) {
        nameStr = nameStr.trim();
        if (names.containsKey(nameStr)) {
          names.get(nameStr).increment();
        } else {
          names.put(nameStr, new Name(nameStr));
        }
      }
    } catch (IOException e) {
      e.printStackTrace();
    }
    names.values().stream().sorted().limit(10).forEach(name -> {
      System.out.println(name);
    });
  }

  private static class Name implements Comparable<Name> {
    String name;
    int freq = 1;

    Name(String name) {
      this.name = name;
    }

    void increment() {
      freq++;
    }

    public String toString() {
      return name + " — " + freq;
    }

    public int compareTo(Name o) { // descending order
      return -1 * Integer.valueOf(freq).compareTo(o.freq);
    }
  }
}
