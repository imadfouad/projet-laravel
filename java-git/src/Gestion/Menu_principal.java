package Gestion;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.UIManager;
import javax.swing.border.SoftBevelBorder;
import javax.swing.border.BevelBorder;
import javax.swing.border.MatteBorder;
import javax.swing.JLabel;
import javax.swing.JScrollPane;
import java.awt.Font;
import javax.swing.JList;
import javax.swing.border.LineBorder;
import javax.swing.JToolBar;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.awt.event.ActionEvent;
import javax.swing.SwingConstants;
import javax.swing.JSeparator;

public class Menu_principal extends JFrame {
	protected static int is_admin ; 
	private JPanel contentPane;
	public static int admin=0 ; 

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Menu_principal frame = new Menu_principal(admin);
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Menu_principal(int admin) {
		this.admin=admin;
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 845, 577);
		contentPane = new JPanel();
		contentPane.setBorder(new MatteBorder(3, 3, 3, 3, (Color) Color.ORANGE));
		contentPane.setBackground(Color.WHITE);
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(3, 3, 825, 2);
		contentPane.add(scrollPane);
		
		JLabel lblNewLabel = new JLabel("menu");
		lblNewLabel.setBounds(306, 3, 253, 41);
		lblNewLabel.setFont(new Font("Times New Roman", Font.BOLD | Font.ITALIC, 43));
		contentPane.add(lblNewLabel);
		
		JButton gestion_users = new JButton("Users");
		// show or hide 
		if (this.admin==1)
		{
			gestion_users.setVisible(true);
		}
		else
		{
			gestion_users.setVisible(false);
		}
		


		gestion_users.setBounds(3, 79, 123, 31);
		gestion_users.setFont(new Font("Tahoma", Font.PLAIN, 18));
		gestion_users.setBackground(UIManager.getColor("TextField.selectionBackground"));
		gestion_users.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				Gestion_Utilisateurs users = new Gestion_Utilisateurs();
				users.setVisible(true);
				setVisible(false);
				
				
			}
		});
		contentPane.add(gestion_users);
		
		JButton gestion_clients = new JButton("Clients");
		gestion_clients.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		gestion_clients.setBounds(3, 159, 123, 36);
		gestion_clients.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_clients);
		
		JButton gestion_reservations = new JButton("R\u00E9servations");
		gestion_reservations.setBounds(3, 346, 123, 31);
		gestion_reservations.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_reservations);
		
		JButton gestion_location = new JButton("Location Contract");
		gestion_location.setBounds(3, 262, 123, 31);
		gestion_location.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		gestion_location.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_location);
		
		JButton gestion_factures = new JButton("Factures");
		gestion_factures.setBounds(705, 257, 123, 41);
		gestion_factures.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_factures);
		
		JButton gestion_vehicules = new JButton("vehicules");
		gestion_vehicules.setBounds(705, 162, 123, 31);
		gestion_vehicules.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_vehicules);
		
		JButton gestion_parking = new JButton("Parkings");
		gestion_parking.setBounds(705, 79, 123, 41);
		gestion_parking.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_parking);
		
		JButton gestion_sanctions = new JButton("Sanctions");
		gestion_sanctions.setBounds(705, 346, 123, 31);
		gestion_sanctions.setFont(new Font("Tahoma", Font.PLAIN, 18));
		contentPane.add(gestion_sanctions);
		
		JSeparator separator = new JSeparator();
		separator.setBounds(3, 79, 825, 2);
		contentPane.add(separator);
	}
}
