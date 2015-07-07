import java.io.*;
import java.util.ArrayList;
import java.util.Scanner;

class Tree {
    public Node rootNode;
    public ArrayList <Node> inOrderTreeNodes;
   
    public class Node {
  
	 	private int nodeValue;
    	private ArrayList <Node> nodeList;
    	private String nodeName;
    	
	
	public Node(int nodeValue, String nodeName) {
	    this.nodeValue = nodeValue;
	    this.nodeList = new ArrayList <Node>();
	    this.nodeName = nodeName;
	 }
	
	public String toString() {
		return nodeName;
	}
	
}


    public Tree() {
    	this.inOrderTreeNodes = new ArrayList <Node>();
	}


    public void createRoot(int value, String newNodeName) {
	rootNode = new Node(value,newNodeName);	
	inOrderTreeNodes.add(rootNode);
	System.out.println("Root node created");	
	}
    
    public Node getRoot(){
    	return inOrderTreeNodes.get(0);
    }
    

    public void addNode(Node currentNode, int newNodeValue, String newNodeName){
    	if (currentNode == null) {
    	    System.out.println("No current node!"); // when there is no root node
    	    return;
    	    }
    	Node newNode = new Node(newNodeValue, newNodeName);
    	currentNode.input.add(newNode);
    	inOrderTreeNodes.add(newNode);
    	
    }
    
   public void printTree() {

        printTree(rootNode,0);
    }

    private void printTree(Node currentNode, int depth) {
        if (currentNode==null)
            return;
        for (int i=0;i<depth;i++)
            System.out.print(" ");
        System.out.println(currentNode.nodeName);
        for (int i=0;i<currentNode.nodeList.size();i++)
            printTree(currentNode.nodeList.get(i),depth+1);
        
        
    }    

}
        
    