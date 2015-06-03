/***
* Author Dami Brown
*
***/

import javax.swing.*;
import java.util.Random;

class Guess{
	public static void main(String[] args){
		ask();
		System.exit(0);
	}
	public static void ask(){
		Random r = new Random();
		int num;
		int guesser;

		num = Integer.parseInt(JOptionPane.showInputDialog("Guess a number between 1-10?"));
		guesser = r.nextInt(10 - 1) + 1; // sets the boundary between 1 and 10

				
		JOptionPane.showMessageDialog(null, "You guessed " + num + "\n I guessed " + guesser);

		if (num==guesser) {
			JOptionPane.showMessageDialog(null, "Yayy!");
		}
		else{
			ask();
		}

		return;
	}
}