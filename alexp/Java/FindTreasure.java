package findtreasure;

import java.awt.Color;
import java.awt.Component;
import java.awt.Dimension;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.Insets;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.util.Random;

import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

public class FindTreasure extends JFrame{
/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	//Field
	int x = 5;
	int y = 5;
	JLabel[][] choiceLabel = new JLabel[x][y];
	ImageIcon treasure = new ImageIcon("treasurechest.gif");
	ImageIcon skeleton = new ImageIcon("Skeleton.png");
	JButton playAgain = new JButton();
	int treasureLocx;
	int treasureLocy;
	int skeletonLocx;
	int skeletonLocy;
	Random myRandom = new Random();
	int counter;
	JLabel counterLabel = new JLabel();
	
//constructor
	public FindTreasure() {
		//setSize(1000,1000); // temporary replace w/ pack() later
		setTitle("Find the Treasure - Alex P.");
		setResizable(false);
		addWindowListener(new WindowAdapter() {
			public void windowClosing(WindowEvent evt) {
				exitForm(evt);
			}
		});
		
		// required: set layout manage or null
		for(int col = 0;col<y;col++) {
			for(int row = 0;row<x;row++) {
				choiceLabel[row][col]= new JLabel();
			}
		}
		getContentPane().setLayout(new GridBagLayout());
		GridBagConstraints gridCon;
		for(int col=0; col<y; col++) {
			for(int row=0; row<x; row++) {
				gridCon = new GridBagConstraints();
				choiceLabel[row][col].setPreferredSize(new Dimension(treasure.getIconWidth(), treasure.getIconWidth()));
				choiceLabel[row][col].setOpaque(true);
				choiceLabel[row][col].setBackground(Color.RED);
				gridCon.gridx = row;
				gridCon.gridy = col;
				gridCon.insets = new Insets(10,10,10,10);
				getContentPane().add(choiceLabel[row][col], gridCon);
				choiceLabel[row][col].addMouseListener(new MouseAdapter() {
					public void mouseClicked(MouseEvent e) {
						labelMouseClicked(e);
						counterLabel.setText("Counter: " + counter);
					}
				}); // end mouse listener
			} // end x grids for loop, choice labels
		} //end y grids for loop
		
		playAgain.setText("Play Again");
		gridCon = new GridBagConstraints();
		gridCon.gridx = 2;
		gridCon.gridy = 6;
		gridCon.insets = new Insets(10,10,10,10);
		getContentPane().add(playAgain, gridCon);
		playAgain.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				playAgainAction(e);
			}
		});
		counterLabel.setText("Counter: " + counter);
		gridCon = new GridBagConstraints();
		gridCon.gridx = 4;
		gridCon.gridy = 6;
		gridCon.insets = new Insets(10,10,10,10);
		getContentPane().add(counterLabel, gridCon);
		getContentPane().setBackground(Color.CYAN);
		pack();
		playAgain.doClick();
		// setVisible(true)
	}//constructor end
	
//methods
	private void playAgainAction(ActionEvent e) {
		for (int col=0; col<y; col++) {
			for(int row = 0; row<x; row++) {
				choiceLabel[row][col].setIcon(null);
				choiceLabel[row][col].setBackground(Color.RED);
			}
		}
		treasureLocx = myRandom.nextInt(x);
		treasureLocy = myRandom.nextInt(y);
		skeletonLocx = myRandom.nextInt(x);
		skeletonLocy = myRandom.nextInt(y);
		playAgain.setEnabled(false);
		counterLabel.setText("Counter: " + counter);
		for(int col = 0; col<y; col++) {
			for(int row=0; row < x; row++){
				choiceLabel[row][col].setText("");
			}
		}

	}
	private void labelMouseClicked(MouseEvent e){
		Component clicked = e.getComponent();
		int choicex;
		int choicey;
		for (choicey = 0; choicey < y;choicey++) {
			for(choicex = 0; choicex < x; choicex++) {
				if(clicked == choiceLabel[choicex][choicey]) {
					choiceLabel[choicex][choicey].setBackground(Color.WHITE);
					counter+=1;
					if (choicex == treasureLocx && choicey == treasureLocy) {
						choiceLabel[choicex][choicey].setIcon(treasure);
						playAgain.setEnabled(true);
						counter = 0;
						JOptionPane.showMessageDialog(null, "You found the treasure!!");
						playAgainAction(null);
					}
					if (choicex == skeletonLocx && choicey == skeletonLocy) {
						choiceLabel[choicex][choicey].setIcon(skeleton);
						for(int col = 0; col<y; col++) {
							for(int row=0; row < x; row++){
								choiceLabel[row][col].setText("You found the skeleton");
								
							}
						}
						JOptionPane.showMessageDialog(null,"You found the skeleton!!");
						playAgainAction(null);
					}
				}
			}
		}
	}
	private void exitForm(WindowEvent evt) {
		System.exit(0);
	}
} // end FindTreasure class
