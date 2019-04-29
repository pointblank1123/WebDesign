package mousedraw;

import java.awt.BasicStroke;
import java.awt.Color;
import java.awt.Component;
import java.awt.Dimension;
import java.awt.Graphics2D;
import java.awt.GridBagLayout;
import java.awt.Insets;
import java.awt.GridBagConstraints;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.event.MouseMotionAdapter;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.awt.geom.Line2D;
import java.awt.geom.Rectangle2D;

import javax.swing.BorderFactory;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JColorChooser;

public class MouseDraw extends JFrame {

	private static final long serialVersionUID = 1L;
	
	JMenuBar mainMenuBar= new JMenuBar();
	
	JMenu fileMenu = new JMenu("File");
	JMenu BoardColor = new JMenu("Board Color");
	JMenu PenSize = new JMenu("Pen Size");
	
	JMenuItem newMenuItem= new JMenuItem("New");
	JMenuItem exitMenuItem = new JMenuItem("Exit");
	JMenuItem saveMenuItem = new JMenuItem("Save");
	JMenuItem openMenuItem = new JMenuItem("Open");
	JMenuItem BlackBoard = new JMenuItem("Black");
	JMenuItem YellowBoard = new JMenuItem("Yellow");
	JMenuItem RedBoard = new JMenuItem("Red");
	JMenuItem FinePen = new JMenuItem("Fine");
	JMenuItem SmallPen = new JMenuItem("Small");
	JMenuItem MedPen = new JMenuItem("Medium");
	JMenuItem LargePen = new JMenuItem("Large");
	
	JPanel drawPanel = new JPanel();
	JPanel colorPanel = new JPanel();
	
	JLabel leftColorLabel = new JLabel();
	JLabel rightColorlabel = new JLabel();
	JLabel[] colorLabel = new JLabel[18];
	
	Color leftColor;
	Color rightColor;
	Color drawColor;
	
	JButton colorPicker = new JButton("Pick");
	
	JColorChooser ch=new JColorChooser(); 
	
	double xPrevious, yPrevious;
	
	Graphics2D g2D;
	
	
	
	public MouseDraw() {
		setTitle("Artistic Creations, Alex P");
		setResizable(false);
		setSize(650,500);
		addWindowListener(new WindowAdapter(){
			public void windowClosing(WindowEvent e) {
				exitForm(e);
			}
		});
		getContentPane().setLayout(new GridBagLayout());
	    
		setJMenuBar(mainMenuBar);
		fileMenu.setMnemonic('F');
		mainMenuBar.add(fileMenu);
		fileMenu.add(newMenuItem);
		fileMenu.addSeparator();
		fileMenu.add(exitMenuItem);
		
		mainMenuBar.add(BoardColor);
		BoardColor.setMnemonic('B');
		BoardColor.add(BlackBoard);
		BoardColor.addSeparator();
		BoardColor.add(YellowBoard);
		BoardColor.addSeparator();
		BoardColor.add(RedBoard);
		
		mainMenuBar.add(PenSize);
		PenSize.setMnemonic('P');
		PenSize.add(FinePen);
		PenSize.addSeparator();
		PenSize.add(SmallPen);
		PenSize.addSeparator();
		PenSize.add(MedPen);
		PenSize.addSeparator();
		PenSize.add(LargePen);

		colorPicker.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				PickerButton(e);
			}
		});
		
		mainMenuBar.setBackground(Color.decode("#AAAAAA"));
		exitMenuItem.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent e) {
				exitMenuItemActionPerformed(e);
			}
		});
		
		newMenuItem.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent e) {
				newMenuItemActionPerformed(e);
			}
		});
		
		BlackBoard.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				blackBoardSelect(e);
			}
		});
		YellowBoard.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				yellowBoardSelect(e);
			}
		});
		RedBoard.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				redBoardSelect(e);
			}
		});
		FinePen.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				finePenSelect(e);
			}
		});
		SmallPen.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				smallPenSelect(e);
			}
		});
		MedPen.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				medPenSelect(e);
			}
		});
		LargePen.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				largePenSelect(e);
			}
		});
		drawPanel.setPreferredSize(new Dimension(500,400));
		drawPanel.setBackground(Color.decode("#DDDDDD"));
		drawPanel.setBorder(BorderFactory.createBevelBorder(0, Color.decode("#e26131"), Color.decode("#a04421")));
		
		GridBagConstraints gridConstraints = new GridBagConstraints();
		gridConstraints.gridx = 0;
		gridConstraints.gridy = 0;
		gridConstraints.gridheight = 2;
		gridConstraints.insets = new Insets(10,10,10,10);
		getContentPane().add(drawPanel, gridConstraints);
		
		drawPanel.addMouseListener(new MouseAdapter() {
			public void mousePressed(MouseEvent e) {
				drawPanelMousePressed(e);
			}
		});
		
		drawPanel.addMouseMotionListener(new MouseMotionAdapter() {
			public void mouseDragged(MouseEvent e) {
				drawPanelMouseDragged(e);
			}
		});
		
		drawPanel.addMouseListener(new MouseAdapter(){
			public void mouseReleased(MouseEvent e){
			drawPaneMouseReleased(e);
			}
		});
		
		leftColorLabel.setPreferredSize(new Dimension(40,40));
		leftColorLabel.setOpaque(true);
		leftColorLabel.setBackground(Color.decode("#DDDDDD"));
		gridConstraints = new GridBagConstraints();
		gridConstraints.gridx = 1;
		gridConstraints.gridy = 0;
		gridConstraints.anchor = GridBagConstraints.NORTH;
		gridConstraints.insets = new Insets(10,5,10,10);
		getContentPane().add(leftColorLabel, gridConstraints);
		
		rightColorlabel.setPreferredSize(new Dimension(40,40));
		rightColorlabel.setOpaque(true);
		rightColorlabel.setBackground(Color.decode("#DDDDDD"));
		gridConstraints = new GridBagConstraints();
		gridConstraints.gridx = 2;
		gridConstraints.gridy = 0;
		gridConstraints.anchor = GridBagConstraints.NORTH;
		gridConstraints.insets = new Insets(10,5,10,10);
		getContentPane().add(rightColorlabel, gridConstraints);
		
		colorPanel.setPreferredSize(new Dimension(80,300));
		colorPanel.setBorder(BorderFactory.createTitledBorder("Colors"));
		colorPanel.setBackground(Color.decode("#CCCCCC"));
		gridConstraints = new GridBagConstraints();
		gridConstraints.gridx = 1;
		gridConstraints.gridy = 1;
		gridConstraints.gridwidth = 2;
		gridConstraints.anchor = GridBagConstraints.NORTH;
		gridConstraints.insets = new Insets(10,10,10,10);
		getContentPane().add(colorPanel, gridConstraints);
		
		colorPicker.setPreferredSize(new Dimension(80, 25));
		colorPicker.setOpaque(true);
		gridConstraints = new GridBagConstraints();
		gridConstraints.gridx = 1;
		gridConstraints.gridy = 1;
		gridConstraints.gridwidth = 2;
		gridConstraints.anchor = GridBagConstraints.SOUTH;
		gridConstraints.insets = new Insets(10,10,10,10);
		getContentPane().add(colorPicker, gridConstraints);
		
	
		colorPanel.setLayout(new GridBagLayout());
		int j = 0;
		for(int i = 0; i < 18; i++) {
			colorLabel[i] = new JLabel();
			colorLabel[i].setPreferredSize(new Dimension(30,30));
			colorLabel[i].setOpaque(true);
			colorLabel[i].setBorder(BorderFactory.createLineBorder(Color.decode("#BBBBBB"),2));
			gridConstraints = new GridBagConstraints();
			gridConstraints.gridx = j;
			gridConstraints.gridy = i - j * 9;
			colorPanel.add(colorLabel[i], gridConstraints);
			if (i==8) {
				j++;
			}
			
			colorLabel[i].addMouseListener(new MouseAdapter() {
				public void mousePressed(MouseEvent e) {
					colorMousePressed(e);
				}
			});
			
			
		}// end color grids loop
		
		colorLabel[0].setBackground(new Color(255,0,0));
		colorLabel[1].setBackground(new Color(226, 70, 70));
		colorLabel[2].setBackground(new Color(150,0,0));
		colorLabel[3].setBackground(new Color(0,255,0));
		colorLabel[4].setBackground(new Color(88, 255, 92));
		colorLabel[5].setBackground(new Color(0,150,0));
		colorLabel[6].setBackground(new Color(0,0,255));
		colorLabel[7].setBackground(new Color(87, 87, 229));
		colorLabel[8].setBackground(new Color(0,0,150));
		colorLabel[9].setBackground(new Color(229, 34, 229));
		colorLabel[10].setBackground(new Color(163, 16, 163));
		colorLabel[11].setBackground(new Color(232, 97, 232));
		colorLabel[12].setBackground(new Color(14, 175, 173));
		colorLabel[13].setBackground(new Color(8, 122, 120));
		colorLabel[14].setBackground(new Color(89, 229, 227));
		colorLabel[15].setBackground(new Color(255, 255, 0));
		colorLabel[16].setBackground(new Color(150,150,0));
		colorLabel[17].setBackground(new Color(236, 247, 111));
		leftColor = colorLabel[3].getBackground();
		leftColorLabel.setBackground(leftColor);
		rightColor = colorLabel[7].getBackground();
		rightColorlabel.setBackground(rightColor);
	
		
		pack();
		setLocationRelativeTo(null);
			
		g2D = (Graphics2D) drawPanel.getGraphics();  
		
	}// constructor end
	
	private void PickerButton(ActionEvent e) {
	    ch.setSize(600,400);    
	    ch.setVisible(true);  
		Color initialcolor=Color.RED;    
		Color drawColor=JColorChooser.showDialog(this,"Select a color",initialcolor); 
		leftColor = drawColor;
		leftColorLabel.setBackground(drawColor);
	}
	
	private void exitForm(WindowEvent e) {
		g2D.dispose();
		System.exit(0);
	} 
	
	private void exitMenuItemActionPerformed(ActionEvent e) {
		int response;
		response = JOptionPane.showConfirmDialog(null, 
			"Are you sure you want to exit?",
			"Exit Program",
			JOptionPane.YES_NO_OPTION,
			JOptionPane.QUESTION_MESSAGE);
		if(response == JOptionPane.NO_OPTION) {
			return;
		} 
		else {
			exitForm(null);
		}
	}
	private void drawPanelMousePressed(MouseEvent e) {
		if (e.getButton() == MouseEvent.BUTTON1 || e.getButton() == MouseEvent.BUTTON3) {
			xPrevious = e.getX();
			yPrevious = e.getY();
			if (e.getButton() == MouseEvent.BUTTON1) {
				drawColor = leftColor;
			}
			else {
				drawColor = rightColor;
			}
		}
		//System.out.println("mouse x, y = "+ xPrevious + ", " +yPrevious);
	}
	
      
	private void drawPanelMouseDragged(MouseEvent e) {
		Line2D.Double myLine = new Line2D.Double(xPrevious, yPrevious, e.getX(), e.getY()); 
		g2D.setPaint(drawColor);
		g2D.draw(myLine);
		xPrevious = e.getX();
		yPrevious = e.getY();
		//System.out.println("mouse x, y = "+ xPrevious + ", " +yPrevious);
	}
	private void drawPaneMouseReleased(MouseEvent e) {
		if(e.getButton() == MouseEvent.BUTTON1 || e.getButton() == MouseEvent.BUTTON3) {
			Line2D.Double myLine = new Line2D.Double(xPrevious, yPrevious, e.getX(),e.getY());
			g2D.setPaint(drawColor);
			g2D.draw(myLine);
		}
		
	}
	private void colorMousePressed(MouseEvent e) {
		Component clickedColor = e.getComponent();
		//Toolkit.getDefaultToolkit().beep();
		if(e.getButton() == MouseEvent.BUTTON1) {
			leftColor = clickedColor.getBackground();
			leftColorLabel.setBackground(leftColor);
		}
		else if (e.getButton() == MouseEvent.BUTTON3) {
			rightColor = clickedColor.getBackground();
			rightColorlabel.setBackground(rightColor);
		}
	}
	private void newMenuItemActionPerformed(ActionEvent e) {
		int response;
		response = JOptionPane.showConfirmDialog(null, "Are you sure you want to start a new drawing?", "New Drawing", JOptionPane.YES_NO_OPTION, JOptionPane.QUESTION_MESSAGE);
		if (response == JOptionPane.YES_OPTION) {
			g2D.setPaint(drawPanel.getBackground());
			g2D.fill(new Rectangle2D.Double(0,0,drawPanel.getWidth(),drawPanel.getHeight()));
		}
		
	}
	private void blackBoardSelect(ActionEvent e) {
		drawPanel.setBackground(Color.BLACK);
	}
	private void yellowBoardSelect(ActionEvent e) {
		drawPanel.setBackground(Color.YELLOW);
	}
	private void redBoardSelect(ActionEvent e) {
		drawPanel.setBackground(Color.RED);
	}
	private void finePenSelect(ActionEvent e) {
		g2D.setStroke(new BasicStroke(1));
	}
	private void smallPenSelect(ActionEvent e) {
		g2D.setStroke(new BasicStroke(3));
	}
	private void medPenSelect(ActionEvent e) {
		g2D.setStroke(new BasicStroke(5));
	}
	private void largePenSelect(ActionEvent e) {
		g2D.setStroke(new BasicStroke(10));
	}
}// class end