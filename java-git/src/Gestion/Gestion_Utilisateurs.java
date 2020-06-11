package Gestion;

import java.awt.BorderLayout;
import javax.swing.table.TableModel;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JTable;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Color;
import java.awt.Font;
import javax.swing.border.MatteBorder;
import javax.swing.JSeparator;
import javax.swing.JComboBox;
import javax.swing.JInternalFrame;
import javax.swing.border.LineBorder;
import javax.swing.JTextField;
import javax.swing.table.DefaultTableModel;
import javax.swing.JScrollPane;
import javax.swing.UIManager;
import javax.swing.JButton;
import java.awt.SystemColor;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.awt.event.ActionEvent;

public class Gestion_Utilisateurs extends JFrame {

	private JPanel contentPane;
	private JTextField textField_id;
	
	private JTextField textField_name;
	private JTextField textField_secret;
	private JTextField textField_mail;
	private JFrame frame ; 
	
	private JTable table_4;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Gestion_Utilisateurs frame = new Gestion_Utilisateurs();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}});
		}
	

	/**
	 * Create the frame.
	 */
	public Gestion_Utilisateurs() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1114, 719);
		contentPane = new JPanel();
		contentPane.setBackground(Color.WHITE);
		contentPane.setBorder(new MatteBorder(14, 14, 14, 14, (Color) Color.ORANGE));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JSeparator separator = new JSeparator();
		separator.setBounds(136, 86, 660, -21);
		contentPane.add(separator);
		
		JLabel lblNewLabel = new JLabel("Utilisateurs");
		lblNewLabel.setBounds(445, 33, 291, 43);
		lblNewLabel.setFont(new Font("Times New Roman", Font.BOLD | Font.ITALIC, 25));
		contentPane.add(lblNewLabel);
		
		JPanel panel = new JPanel();
		panel.setBounds(234, 98, 582, 480);
		panel.setBorder(new LineBorder(Color.DARK_GRAY, 4));
		contentPane.add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel_1 = new JLabel("id");
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel_1.setBounds(35, 103, 45, 13);
		panel.add(lblNewLabel_1);
		
		JLabel lblPrnom = new JLabel("Full name");
		lblPrnom.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblPrnom.setBounds(35, 186, 82, 17);
		panel.add(lblPrnom);
		
		JLabel lblEmail = new JLabel("password");
		lblEmail.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblEmail.setBounds(35, 271, 82, 23);
		panel.add(lblEmail);
		
		JLabel lblNewLabel_2 = new JLabel("email");
		lblNewLabel_2.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel_2.setBounds(35, 358, 45, 13);
		panel.add(lblNewLabel_2);
		
		textField_id = new JTextField();
		textField_id.setBounds(305, 102, 96, 19);
		panel.add(textField_id);
		textField_id.setColumns(10);
		
		textField_name = new JTextField();
		textField_name.setBounds(305, 187, 96, 19);
		panel.add(textField_name);
		textField_name.setColumns(10);
		
		textField_secret = new JTextField();
		textField_secret.setBounds(305, 271, 96, 19);
		panel.add(textField_secret);
		textField_secret.setColumns(10);
		
		textField_mail = new JTextField();
		textField_mail.setBounds(305, 345, 96, 19);
		panel.add(textField_mail);
		textField_mail.setColumns(10);
		
		JSeparator separator_1 = new JSeparator();
		separator_1.setBounds(34, 86, 995, 2);
		contentPane.add(separator_1);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBackground(UIManager.getColor("Button.disabledShadow"));
		panel_1.setForeground(UIManager.getColor("Button.highlight"));
		panel_1.setBorder(new LineBorder(new Color(0, 0, 0), 3));
		panel_1.setBounds(32, 606, 1031, 51);
		contentPane.add(panel_1);
		
		JButton btn_add_user = new JButton("Add ");
		btn_add_user.setFont(new Font("Tahoma", Font.BOLD, 13));
		btn_add_user.setForeground(Color.DARK_GRAY);
		btn_add_user.setBounds(53, 10, 121, 31);
		btn_add_user.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					String sql = "Insert into users Values ('"+textField_id.getText()+"','"+textField_secret.getText()+"','"+0+"','"+textField_mail.getText()+"','"+textField_name.getText()+"')";
					
					
					
					
					
					boolean rs = stmt.execute(sql);
					JOptionPane.showConfirmDialog(null," User added ! ");

					
					con.close();
				}
				
				catch(Exception e1){
					System.out.print(e1);
					
				}
			}
		});
					
			
					
		panel_1.setLayout(null);
		btn_add_user.setBackground(Color.GREEN);
		panel_1.add(btn_add_user);
		
		JButton btn_supp_user = new JButton("Supprimer");
		btn_supp_user.setBackground(Color.RED);
		btn_supp_user.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				
			
			
		}});
		btn_supp_user.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_supp_user.setBounds(281, 12, 96, 26);
		panel_1.add(btn_supp_user);
		
		JButton btn_suspn_user = new JButton("suspendre");
		btn_suspn_user.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_suspn_user.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				
				
			}
		});
		btn_suspn_user.setBounds(477, 12, 109, 26);
		panel_1.add(btn_suspn_user);
		
		JButton btn_modif_user = new JButton("Modifier");
		btn_modif_user.setBackground(Color.ORANGE);
		btn_modif_user.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_modif_user.setBounds(698, 12, 109, 26);
		panel_1.add(btn_modif_user);
		
		JButton btn_exit = new JButton("exit");
		btn_exit.setBackground(Color.CYAN);
		btn_exit.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_exit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				System.exit(0);
			}
		});
		btn_exit.setBounds(885, 10, 96, 27);
		panel_1.add(btn_exit);
			
}	
}