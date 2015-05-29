package challenge3;

import java.io.File;
import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.util.*;

//C:\Users\kylep\Documents\GitHub\GoogleIO2015-CodeChallenge\Challenge3\gettysburg.txt

public class Palindrome {
	public static void main(String[] args){
		String text = new String();
		Scanner in = new Scanner(System.in);
		
		try{
			System.out.print("Input file: ");
			String inFile = in.next();
		   	InputStream inStream = new FileInputStream(inFile);
		   	BufferedReader reader = new BufferedReader(new InputStreamReader(inStream));
	        String line;
	        while ((line = reader.readLine()) != null) {
	        	text = text + line;
	        }
		}
		catch (IOException exception)
		{  
			System.out.println("Error processing file: " + exception);
		}
		
		text = text.replaceAll("[^A-Za-z]+", "").toUpperCase();
		//C:\Users\kylep\Documents\GitHub\GoogleIO2015-CodeChallenge\Challenge3\gettysburg.txt
		//System.out.println(text);
		int longestpalindrome = 0;
		String palindrome = new String();
		char[] textcharArray = text.toCharArray();
		for(int pivot = 1; pivot < textcharArray.length - 1; pivot++){
			int i = 1;
			int pal = 1;
			boolean ispal = true;
			while(ispal){
				i++;
				if(pivot - i < 0){
					i = i - 1;
					ispal = false;
				}
				if(pivot + i >= textcharArray.length){
					i = i - 1;
					ispal = false;
				}
				
				int testlength = 1+2*i;
				int start = pivot - i;
				char[] testarray = new char[testlength];
				
				for(int j = 0; j < testlength; j++){
					testarray[j] = textcharArray[start + j]; 
				}
				if(check(testarray)){
					if(longestpalindrome < testlength){
						longestpalindrome = testlength;
						palindrome = new String(testarray);
						}
				}
				else{
					ispal = false;
				}
					
			}
		}
		System.out.println(palindrome);
		System.out.println("Longest Palindrome Length : "+longestpalindrome);
		
	}
	
	public static boolean check(char[] charArray){
		boolean checkvalue = true;
		
		int end = charArray.length - 1;
		for(int i=0; i<charArray.length; i++)
		{
			
			if(charArray[i] != charArray[end-i]){
				checkvalue = false;
			}
		}
		return checkvalue;
	}
	
}
