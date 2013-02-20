#!/usr/bin/env python
# -*- coding: utf8 -*- 


# Opening of the reaction file 
reactions = open('reactionTemp2.txt','r')

# Opening of the metabolites file
metabolite_brut = open('metabolites.mfile','r')

# Reagents list
liste_reac = []

# Deleting of ' " ' 
for met in metabolite_brut:
	metabolite_brut2 = met.split()
for i in metabolite_brut2:
	metabolite_propre = i.replace("\"","")
	liste_reac.append(metabolite_propre)

# stoechiometry matrix
matrix = []

# For each line of the reactions file 
for reaction in reactions:
	# Creation of list containing one 0 per metabolite
	matrix_reaction = [0]*len(liste_reac)
	# For each metabolite of a reaction 
	for word in range(len(reaction.split())):
		# Parsing of the reaction list 
		for i in range(len(liste_reac)):
			# If a "word" (metabolite) is also in the reaction list 
			if reaction.split()[word]==liste_reac[i]:
				# If the previous element is = or =>
				if (reaction.split()[word-1]=="=" or reaction.split()[word-1]=="=>"):
					# So his stoechiometry is 1
					matrix_reaction[i]=1.0
				# If the previous element is = or =>
				elif reaction.split()[word-1]==":":
					# So his stoechiometry is -1
					matrix_reaction[i]=-1.0
				elif reaction.split()[word-1]=="+":
					matrix_reaction[i]=1 # To modify
				else:
					# Transformation of the string to a float 
					f=float(reaction.split()[word-1])
					# If the two words before are = or =>
					if (reaction.split()[word-2]=="=" or reaction.split()[word-2]=="=>"):
						# So his stoechiometry is 1
						matrix_reaction[i]=f
					# si deux mots avant on a un :
					elif reaction.split()[word-2]==":":
						# So his stoechiometry is -1
						matrix_reaction[i]=-f
					elif reaction.split()[word-2]=="+":
						matrix_reaction[i]=f
					# Else his stoechiometry is -f
					#matrix_reaction[i]=f
	if matrix_reaction != [0]*len(liste_reac):
		matrix.append(matrix_reaction)


# Writing of the raw matrix 
matrice = open("matrice.txt","w")
for m in matrix:
	m2=str(m)
	m2.replace("\s","")
	m2.replace(",","\t")
	matrice.write(m2)
	matrice.write("\n")
matrice.close()


# Wrintig of the final matrix 

# Opening of the file containing the raw matrix 
matrice = open("matrice.txt","r")
lignes  = matrice.readlines()
matrice.close()

# Creation of the final file, containing the final matrix
m3 = open("stoechiometry.sfile","w")


# For each line, deleting of [, ] and spaces 
# Comas are replaced by tabulations 
for ligne in lignes:
	l1=ligne.replace("[","")
	l2=l1.replace("]","")
	l3=l2.replace("\s","")
	l4=l3.replace(",","\t")
	m3.write(l4)
	# m3.write("\n")

m3.close()


